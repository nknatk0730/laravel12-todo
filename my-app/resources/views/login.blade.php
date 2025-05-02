<x-layout>
  <form action="{{ route('login.attempt') }}" method="POST">
    @csrf
    @if ($errors->any())
      <div>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <input class='border' type="email" name="email" placeholder="Email" />
    <input class='border' type="password" name="password" placeholder="Password" />
    <button class="border" type="submit">Login</button>
  </form>
</x-layout>
