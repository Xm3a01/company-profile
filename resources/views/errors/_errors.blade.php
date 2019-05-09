
<script type="text/javascript">
    $(document).ready(function() {
       @if(Session::has('success'))
           $.toast({
             heading: 'نجاح',
             text: "{{ Session::get('success') }}",
             showHideTransition: 'slide',
             position: 'botton-right',
             icon: 'success',
             class: 'message'
             });
             @endif
     
            @if(Session::has('error'))
           $.toast({
             heading: 'حطأ',
             text: "{{ Session::get('error') }}",
             showHideTransition: 'slide',
             position: 'botton-right',
             icon: 'success',
             class: 'message'
            });
      @endif
    
   @foreach ($errors->all() as $error)
     $.toast({
        heading: 'حطأ',
        text: "{{ $error }}",
        showHideTransition: 'slide',
        position: 'botton-left',
        icon: 'error',
        class: 'message',
        hideAfter: false
       });
       @endforeach
});
      
 </script>