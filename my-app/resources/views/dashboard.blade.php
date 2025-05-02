<x-layout>
  <h1>Welcome {{ Auth::user()->name }} to the private dashboard.</h1>
  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="border" type="submit">Logout</button>
  </form>
</x-layout>