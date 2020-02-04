<footer class="footer">
  <div>
    <span>&copy; {{date('Y')}}. All Right Reserved </span>
    <span>Created by <a href="http://themepixels.me/">{{ config('app.name', 'Laravel') }}</a></span>
  </div>
  <div>
    <nav class="nav">
      <a href="{{ url('/') }}" class="nav-link">Term of Use</a>
      <a href="{{ url('/') }}" class="nav-link">HIPPA</a>
      <a href="{{ url('/') }}" class="nav-link">Contact Us</a>
      <a href="{{ url('/') }}" class="nav-link">Help</a>
      <a href="{{ url('/') }}" class="nav-link">Corporate Login</a>
    </nav>
  </div>
</footer>