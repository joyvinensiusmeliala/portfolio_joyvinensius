<footer class="pt-4 pb-4 text-center bg-light">
    <div class="container">
      <div class="my-3">
        @php
            $settings=DB::table('settings')->get();
        @endphp
        <div class="h4">@foreach($settings as $data) {{$data->nama}}@endforeach</div>
        @php
        $pekerjaan=DB::table('pekerjaans')->where('status','active')->get();
        // dd($categories);
        @endphp
        <p>@foreach($pekerjaan as $data) {{$data->nama_pekerjaan}}@endforeach</b> - @foreach($pekerjaan as $data) {{$data->nama_perusahaan}}@endforeach</p>
        <div class="social-nav">
          <nav role="navigation">
            <ul class="nav justify-content-center">
              <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a></li>
              <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
              <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
              <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
              <li class="nav-item"><a class="nav-link" href="https://www.behance.net/templateflip" title="Behance"><i class="fab fa-behance"></i><span class="menu-title sr-only">Behance</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="text-small text-secondary">
        <div class="mb-1">&copy; @foreach($settings as $data) {{$data->nama}}@endforeach. All rights reserved.</div>
        <div>
          {{--  <!-- Make sure to buy a license for the template before removing the line below. Buy license on https://templateflip.com/ -->Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>  --}}
      </div>
    </div>
  </footer>
