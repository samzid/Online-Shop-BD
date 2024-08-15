@include('backend.include.header')
@include('backend.include.css')
@include('backend.include.left-panel')

@include('backend.include.headpanel')
@include('backend.include.rightpanel')



<!-- ########## START: MAIN PANEL ########## -->
   @yield("content")
<!-- ########## END: MAIN PANEL ########## -->
@include('backend.include.script')
