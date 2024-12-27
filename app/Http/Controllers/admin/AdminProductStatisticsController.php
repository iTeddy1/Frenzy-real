<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class AdminProductStatisticsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sortBy = $request->input('sort_by', 'name');
        $sortOrder = $request->input('sort_order', 'asc');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Điều kiện cho khoảng ngày
        $dateCondition = "";
        if ($startDate && $endDate) {
            $dateCondition = "AND orders.created_at BETWEEN '{$startDate}' AND '{$endDate}'";
        }

        // Tổng doanh thu và tổng số lượng
        $totalRevenue = DB::table('order_items')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
                $query->whereBetween('orders.created_at', [$startDate, $endDate]);
            })
            ->sum(DB::raw('order_items.quantity * order_items.price'));

        $totalQuantity = DB::table('order_items')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
                $query->whereBetween('orders.created_at', [$startDate, $endDate]);
            })
            ->sum('order_items.quantity');

        // Truy vấn sản phẩm
        $products = Product::query()
            ->select('products.*', DB::raw("
                (SELECT SUM(order_items.quantity)
                 FROM order_items
                 WHERE order_items.product_id = products.id
                 AND EXISTS (
                     SELECT 1 FROM orders
                     WHERE orders.id = order_items.order_id
                     {$dateCondition}
                 )
                ) as total_quantity
            "), DB::raw("
                (SELECT SUM(order_items.quantity * order_items.price)
                 FROM order_items
                 WHERE order_items.product_id = products.id
                 AND EXISTS (
                     SELECT 1 FROM orders
                     WHERE orders.id = order_items.order_id
                     {$dateCondition}
                 )
                ) as total_revenue
            "))
            ->when($search, function ($query, $search) {
                $query->where('name', 'LIKE', "%{$search}%");
            })
            ->orderBy($sortBy === 'total_quantity' || $sortBy === 'total_revenue' ? DB::raw($sortBy) : $sortBy, $sortOrder)
            ->paginate(10);

        return view('admin.statistics.index', [
            'products' => $products,
            'totalRevenue' => $totalRevenue,
            'totalQuantity' => $totalQuantity,
            'search' => $search,
            'sortBy' => $sortBy,
            'sortOrder' => $sortOrder,
            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
    }
}
