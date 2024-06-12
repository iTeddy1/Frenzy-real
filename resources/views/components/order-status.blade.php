@php
  $status = $orderstatus ?? 'pending';
  $color = '';

  switch ($status) {
    case 'pending':
      $color = 'yellow';
      break;
    case 'processing':
      $color = 'blue';
      break;
    case 'shipped':
      $color = 'green';
      break;
    case 'delivered':
      $color = 'teal';
      break;
    case 'cancelled':
      $color = 'red';
      break;
    default:
      $color = 'gray';
      break;
  }
@endphp

<span class="status-tag bg-{{ $color }}">{{ ucfirst($status) }}</span>