@extends('layouts.app')
@section('content')

<div class="p-5">
  <div >
    <div class="mb-10">
      <div class="self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800">
        Contact
      </div>
      {{ Breadcrumbs::render('contact') }}
    </div>

    <h2
      class="text-center text-dark leading-[54px] text-[40px] font-bold break-words"
    >
      Let’s talk about your problem
    </h2>
    <p
      class="text-center text-text-normal text-lg break-words"
    >
      drop us a line through the form and we’ll get back to you
    </p>
    <div class="flex justify-center mt-8">
      <form action="{{ route('contact.submit') }}" method="POST" class="w-3/4">
        @csrf
        <div>
          <label
            for="email"
            class="block mb-2 text-lg font-medium text-gray-900"
            >Your email</label
          >
          <input
            type="email"
            id="email"
            name="email"
            class="block w-full p-2.5 border border-divider rounded h-[47px] text-lg leading-[54px]"
            placeholder="email@gmail.com"
            required
          />
        </div>
        <div>
          <label
            for="name"
            class="block my-2 text-lg font-medium text-gray-900"
            >Full name</label
          >
          <input
            type="text"
            id="name"
            name="name"
            class="block p-3 w-full border border-divider rounded h-[47px] text-lg leading-[54px]"
            placeholder="Let us know your name"
            {{-- required --}}
          />
        </div>
        <div class="sm:col-span-2">
          <label
            for="message"
            class="block my-2 text-lg font-medium text-gray-900"
            >Your message</label
          >
          <textarea
            id="message"
            rows="6"
            name="message"
            class="block px-2.5 w-full border border-divider rounded h-[125px] flex-shrink-0 text-lg leading-[54px]"
            placeholder="Leave a comment..."
          ></textarea>
        </div>
        <div class="btn flex justify-center my-6">
          <button
            type="submit"
            class="bg-primary hover:bg-primary-dark text-[20px] text-white font-semibold py-2 px-4 rounded mt-4 w-24"
          >
            Send
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection