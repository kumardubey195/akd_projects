@extends('layouts.template')
@section('title', 'Students')

@include('layouts.header')

@section('content')

<div id="pagination_data">
    @include("students_pagination", ["students"=>$students])
</div>


<script>
    $(function() {
        $(document).on("click","#pagination a,#search_btn",function(){

          //get url and make final url for ajax
          var url=$(this).attr("href");
          var append=url.indexOf("?")==-1?"?":"&";
          var finalURL=url+append+$("#searchform").serialize();
alert(finalURL);
          //set to current url
          window.history.pushState({},null, finalURL);

          $.get(finalURL,function(data){
            $("#pagination_data").html(data);
          });
          return false;
        })

      });
      </script>

@include('layouts.footer')
