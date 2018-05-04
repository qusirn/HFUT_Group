@extends('layout.header_and_footer')
@section('main_content')
<script src="/js/AgoraRTCSDK-2.1.1.js"></script>
<script src="/js/AgoraWBSDK-1.0.0.js"></script>
<script src="/js/AgoraSig-1.2.1.js"></script>
<script src="/js/script-host.js"></script>
<script src="/js/recording.js"></script>
<script src="/js/lc_switch.js" type="text/javascript"></script>
<div id="agora-remote" style="width:800px;height:800px"></div>
<button type="button" name="button" onclick="record_test">录播</button>

@stop
