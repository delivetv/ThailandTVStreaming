<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Streaming TV in Thailand ">
    <title>Thailand Streaming ( THS Project ) : OF.IN.TH</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="images/favicon/android-icon-192x192.png" sizes="192x192"> 
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="css/prism.css" rel="stylesheet">
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- loading -->
    <link href="css/circle.css" rel="stylesheet"> 
    <script type="text/javascript" src="./js/pace.js"></script>
    <!-- Player -->  
    <script type="text/javascript" src="./player/libs/swfobject.js"></script>
    <script type="text/javascript" src="./player/libs/ParsedQueryString.js"></script>
    <script type="text/javascript" src="../../../playlists/streams.js"></script>
    <script type="text/javascript">  
        var player = null;

function loadStream(url) {
  player.setMediaResourceURL(url);
}

function getlink(url) {
  return "index.php?src=" + encodeURIComponent(url) ;
}

function listStreams(list, container) {
  for(var i=0; i<list.length; i++) { var entry = document.createElement("li");
    //entry.innerHTML = "<a href=" + getlink(list[i].file) + ">" +list[i].title+"</a>";
    entry.innerHTML = "<a href='#' onclick='return loadStream(\""+list[i].file+"\")'>"+list[i].title+"</a>";    
    document.getElementById(container).appendChild(entry);
  }
  //loadStream(list[0].file);
}


        function jsbridge(playerId, event, data) {
          if (player == null) {
            player = document.getElementById(playerId);
          }
          switch(event) {
            case "onJavaScriptBridgeCreated":
              listStreams(teststreams,"streamlist");
              break;
             case "timeChange":
             case "timeupdate":
             case "progress":
               break;
             default:
              console.log(event, data);
            }
        }

            // Collect query parameters in an object that we can
            // forward to SWFObject:
            
            var pqs = new ParsedQueryString();
            var parameterNames = pqs.params(false);
            var parameters = {
                src: "http://live.thairath.co.th/trtv/playlist.m3u8",
                //src: "http://localhost:8082/playlists/test_001/stream.m3u8",
                autoPlay: "true",
                verbose: true,
                controlBarAutoHide: "true",
                controlBarPosition: "bottom",
                poster: "images/donate.png",
                javascriptCallbackFunction: "jsbridge",
                plugin_hls: "./bin/release/flashlsOSMF.swf",
                hls_minbufferlength: -1,
                hls_maxbufferlength: 300,
                hls_lowbufferlength: 3,
                hls_seekmode: "KEYFRAME",
                hls_startfromlevel: -1,
                hls_seekfromlevel: -1,
                hls_live_flushurlcache: false,
                hls_info: true,
                hls_debug: false,
                hls_debug2: false,
                hls_warn: true,
                hls_error: true,
                hls_fragmentloadmaxretry : -1,
                hls_manifestloadmaxretry : -1,
                hls_capleveltostage : false,
                hls_maxlevelcappingmode : "downscale"
            };
            
            for (var i = 0; i < parameterNames.length; i++) {
                var parameterName = parameterNames[i];
                parameters[parameterName] = pqs.param(parameterName) ||
                parameters[parameterName];
            }
            
            var wmodeValue = "direct";
            var wmodeOptions = ["direct", "opaque", "transparent", "window"];
            if (parameters.hasOwnProperty("wmode"))
            {
                if (wmodeOptions.indexOf(parameters.wmode) >= 0)
                {
                    wmodeValue = parameters.wmode;
                }                   
                delete parameters.wmode;
            }
            
            // Embed the player SWF:                
            swfobject.embedSWF(
                "GrindPlayer.swf"
                , "GrindPlayer"
                , 850
                , 480
                , "10.1.0"
                , "expressInstall.swf"
                , parameters
                , {
                    allowFullScreen: "true",
                    wmode: wmodeValue
                }
                , {
                    name: "GrindPlayer"
                }
            );
            
        </script>
       
  </head>
    
  <body>
    <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo"><a id="logo-container" href="" class="brand-logo">
            <object id="front-page-logo" type="image/svg+xml" data="res/ths.svg">Your browser does not support SVG</object></a></li>
        <li class="bold"><a href="./" class="waves-effect waves-teal"><i class="mdi-action-home"></i> หน้าหลัก</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
              <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="mdi-editor-insert-photo"></i> ทีวีดิจิตอล</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="./?src=http://61.91.12.34:1935/live/smil:tv5adaptive.smil/playlist.m3u8">5 HD</a></li>
                  <li><a href="./?src=http://thaipbs-live.cdn.byteark.com/live/playlist_720p/index.m3u8">ThaiPBS</a></li>
                  <li><a href="./?src=http://111.223.37.195:1935/thaitv3_HD/smil:thaitv3_HD.smil/playlist.m3u8
">3 HD</a></li>
                  <li><a href="./?src=http://111.223.37.197:1935/thaitv3_SD/smil:thaitv3_SD.smil/playlist.m3u8">3 SD</a></li>
                  <li><a href="./?src=http://111.223.37.197:1935/thaitv3_FM/smil:thaitv3_FM.smil/playlist.m3u8">3 Family</a></li>
                  <li><a href="./?src=http://edge9.psitv.tv:1935/liveedge/307803302519_600/playlist.m3u8">MCOT HD</a></li>
                  <li><a href="./?src=http://202.44.53.13/dtac/mcot_family.stream/chunklist_w191128959.m3u8">MCOT Family</a></li>
                  <li><a href="./?src=http://edge10.psitv.tv:1935/liveedge/308806374084_600/playlist.m3u8">NBT</a></li>
                  <li><a href="./?src=http://edge10.psitv.tv:1935/liveedge/308235425316_600/playlist.m3u8">True4U</a></li>
                  <li><a href="./?src=http://livestream.voicetv.co.th:1935/live-edge/smil:voicetv_all.smil/playlist.m3u8?DVR">VoiceTV</a></li>
                  <li><a href="./?src=http://edge10.psitv.tv:1935/liveedge/292277227873_600/chunklist_w376671613.m3u8">Workpoint</a></li>
                  <li><a href="./?src=rtmp://203.145.115.10/live/livestream1">Spring New</a></li>
                  <li><a href="./?src=rtmp://202.142.207.150/live/liveinfinity1">8</a></li>
                  <li><a href="./?src=http://112.121.152.34/stream/5195e80fe1ed0/playlist.m3u8
">Amarin TV</a></li>
                  <li><a href="./?src=http://rtmp.thaitv.co.th/live/thaitv.m3u8">ThaiTV</a></li>
                  <li><a href="./?src=http://202.142.220.224:1935/gmmone/gmmone/playlist.m3u8">GMM ONE</a></li>
                  <li><a href="./?src=http://edge10.psitv.tv:1935/liveedge/292277190845_600/playlist.m3u8">GMM</a></li>
                  <li><a href="./?src=http://nationstream.nationgroup.com/live.isml/manifest(format=m3u8-aapl).m3u8">Now</a></li>
                  <li><a href="./?src=http://202.170.127.178:1935/dcinode001/nation.sdp/playlist.m3u8">Nation</a></li>
                  <li><a href="./?src=http://live.thairath.co.th/trtv/playlist.m3u8">Thairath</a></li>
                  <li><a href="./?src=http://newtv.cdn.byteark.com/live/playlist_576p/index.m3u8">New TV</a></li>
                  <li><a href="./?src=http://solution01.stream.3bb.co.th:1935/MonoTV1080/1080p_th/playlist.m3u8">Mono 29</a></li>
                  <li><a href="./?src=http://iam.brighttv.co.th/BrightTV/smil:live.smil/playlist.m3u8">Bright TV</a></li>
                  <li><a href="./?src=http://pptv.cdn.byteark.com/live/playlist.m3u8">PPTV</a></li>  
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="mdi-maps-satellite"></i> ทีวีดาวเทียม</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="./?src=rtmp://202.57.162.55:1935/live03/live03">รัฐสภา</a></li> 
                  <li><a href="./?src=http://202.142.207.150:1935/live/liveyaaktv1/playlist.m3u8">สตาร์แม็กซ์</a></li> 
                  <li><a href="./?src=http://210.1.60.208:1935/live/bang.sdp/playlist.m3u8">ฺBang Channel</a></li> 
                  <li><a href="./?src=http://www.m-channel.com:1935/live/m320.sdp/playlist.m3u8">M Channel</a></li> 
                  <li><a href="./?src=http://live-th.dmc.tv/live/th_platinum.stream/playlist.m3u8">DMC</a></li> 
                  <li><a href="./?src=http://solution01.stream.3bb.co.th:1935/edgezaanetwork/zaa_all.smil/playlist.m3u8">Zaa Network</a></li> 
                  <li><a href="./?src=http://122.155.180.109:1935/live/rsulive/playlist.m3u8">RSU TV</a></li> 
                  <li><a href="./?src=http://mobile.wezatv.com:1935/live/travel/playlist.m3u8">Travel Channel</a></li> 
                  <li><a href="./?src=http://202.129.206.189:1935/live/hplus/.m3u8">H Plus</a></li> 
                  <li><a href="./?src=http://61.19.18.237/live/m1.sdp/playlist.m3u8">Cat Channel</a></li> 
                  <li><a href="./?src=http://edge1.psitv.tv:1935/liveedge/308058215552_600/playlist.m3u8">Gang Cartoon</a></li> 
                  <li><a href="./?src=http://edge5.psitv.tv:1935/liveedge/292277442241_600/playlist.m3u8">Cartoon Club</a></li> 
                  <li><a href="./?src=http://203.151.21.9:1935/live/You2PlayTV_1/playlist.m3u8">You2Play</a></li> 
                  <li><a href="./?src=http://203.151.45.35:1935/live/mp4:game/playlist.m3u8">สื่อสร้างสุข</a></li> 
                  <li><a href="./?src=http://27.254.44.112/whitechannellive2/whitechannellive2/playlist.m3u8">White Channel</a></li> 
                  <li><a href="./?src=http://radio2.thaidhost.com:8888/muslimonair1/live/playlist.m3u8">Yateem TV</a></li> 
                  <li><a href="./?src=http://202.57.162.52:1935/TV_muslim1/TV_muslim1/playlist.m3u8">ทีวีมุสลิม</a></li>
                  <li><a href="./?src=http://edge5.psitv.tv:1935/liveedge/292277350688_600/playlist.m3u8">ฟ้าวันใหม่</a></li>
                  <li><a href="./?src=http://live.netdesignhost.com:1935/policetvlive/policetvlive/playlist.m3u8">Police TV</a></li>
                  <li><a href="./?src=http://live.poptv.co.th:1935/poptv/live/playlist.m3u8">POP TV</a></li>
                  <li><a href="./?src=http://live.thaichaiyotv.co.th:1935/thaichaiyotv/live/playlist.m3u8">ไทยไชโย</a></li>
                  <li><a href="./?src=http://psi06.jai-d.com:1935/liveedge/314311166269_600/playlist.m3u8">มงคลแชนแนล</a></li>
                  <li><a href="./?src=http://203.156.63.20:1935/live/ddtv/playlist.m3u8">DDTV</a></li>
                  <li><a href="./?src=http://livejctv.aitstreaming.com:1935/live/mobile.sdp/playlist.m3u8">JCTV</a></li>
                  <li><a href="./?src=http://27.131.144.177:1935/live/live/playlist.m3u8">Jewelry Channel</a></li>
                  <li><a href="./?src=http://vip.login.in.th:1935/CTB/CTB/playlist.m3u8">CTB Channel</a></li>
                  <li><a href="./?src=http://210.1.60.208:1935/live/shaker.sdp/playlist.m3u8">Media Shaker</a></li>
                  <li><a href="./?src=http://live10.netdesignhost.com:1935/pingchlive/pingchlive/playlist.m3u8">Ping Channel</a></li>
                  <li><a href="./?src=http://61.19.244.112:1935/live/livestream/playlist.m3u8">ETV</a></li>
                  <li><a href="./?src=http://stream.13livetv.com:1935/rtplive/13livetv/playlist.m3u8">สยามไทย</a></li>
                  <li><a href="./?src=http://27.254.44.112:1935/sanooklive1/sanooklive1/playlist.m3u8">Sanook</a></li>
                  <li><a href="./?src=http://vip.login.in.th:1935/RROMDTV/RROMDTV/playlist.m3u8">โชคดีทีวี</a></li>
                  <li><a href="./?src=http://edge2.psitv.tv:1935/liveedge/292277143069_300/playlist.m3u8">PSI</a></li>
                  <li><a href="./?src=http://vip.login.in.th:1935/ideatv8/ideatv8/playlist.m3u8">Idea TV</a></li> 
                  </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="mdi-maps-flight"></i> ทีวีต่างประเทศ</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="./?src=http://abclive.abcnews.com/i/abc_live4@136330/index_1200_av-b.m3u8">ABC news</a></li>
                  <li><a href="./?src=http://wpc.c1a9.edgecastcdn.net/hls-live/20C1A9/bbc_world/ls_satlink/b_828.m3u8">BBC World News</a></li>
                  <li><a href="./?src=http://cdn3.videos.bloomberg.com/btv/us/master.m3u8?b?b*t$">Bloomberg</a></li>
                  <li><a href="./?src=http://plslive-w.nhk.or.jp/nhkworld/app-mainp/live.m3u8">NHK World</a></li>
                  <li><a href="./?src=http://odna.octoshape.net/f3f5m2v4/cds/smil:ch1_auto.smil/playlist.m3u8">RT</a></li>
                  <li><a href="./?src=http://wpc.c1a9.edgecastcdn.net/hls-live/20C1A9/cnn/ls_satlink/b_528.m3u8">CNN</a></li>
                  <li><a href="./?src=http://wpc.c1a9.edgecastcdn.net/hls-live/20C1A9/cnbc_eu/ls_satlink/b_,264,528,828,.m3u8">CNBC</a></li>
                  <li><a href="./?src=http://hindiabp-lh.akamaihd.net/i/hindiabp1new_1@192103/master.m3u8">ABP</a></li>
                  <li><a href="./?src=http://ibn7_hls-lh.akamaihd.net/i/ibn7_hls_n_1@174951/index_3.m3u8">IBN</a></li>
                  <li><a href="./?src=http://fichd-lh.akamaihd.net/i/NATGEOW_LATAM@304509/index_2000_av-b.m3u8?sd=10&rebase=on?monclovacaliente.m3u8">Nat Geo</a></li>
                  <li><a href="./?src=http://hlsstr03.svc.iptv.rt.ru/hls/CH_C04_NGCHD/variant.m3u8?version=2">Nat Geo HD</a></li>
                  <li><a href="./?src=http://wpc.c1a9.edgecastcdn.net/hls-live/20C1A9/skynews/ls_satlink/b_828.m3u8">SkyNews</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="bold"><a href="about.php" class="waves-effect waves-teal"><i class="mdi-maps-directions-walk"></i> เกี่ยวกับ</a></li>
      </ul>
    </header>
    <main>
      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h1 class="header center-on-small-only">ไทยแลนด์ สตรีมมิ่ง โปรเจกต์</h1> 
          <div class='row center'>
            <h4 class ="header col s12 light center">รวดเร็ว ปลอดภัย ไร้โฆษณา</h4>
          </div>
          
        </div>
        <div class="github-commit">
          <div class="container">
            <div class="commit">
              <script src="http://127.0.0.1/ThailandTVStreaming/useron/online.php?js=1"></script>
              &nbsp;&nbsp;
              &nbsp;&nbsp;
              &nbsp;&nbsp;
              &nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;
                
                วัน
               <?php
               include( 'thaidate.php' );
               echo thaidate( 'l j F Y H:i', time() ); //ผลลัพธ์ 5 จันทร์ มีนาคม 2555
               ?>
               น.
                
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="section">

          <div class="row">
            <div class="col s12 m8 offset-m2">
              <br>
                
        <div class="video-container">        
                    <div id="GrindPlayer">
                        <p>
                            Alternative content
                        </p>
                    </div>
        </div>    
                            
            </div>
          </div>
</main>
      
<footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
               <h5 class="white-text">ข้อควรทราบ</h5>
                <p class="grey-text text-lighten-4"> เว็บไซต์แห่งนี้เปิดเพื่อการศึกษาระบบการทำงานของ Server, Apache, HTML, HLS, m3u8 format ทางผู้จัดทำไม่มีนโยบายการเรียกเก็บเงินจากผู้ใช้งานแต่อย่างใดทั้งสิ้น ภาพและเสียงเป็นลิขสิทธิ์ของแต่ละสถานี และเมื่อมีการขอความร่วมมือให้ถอดช่องออก จะดำเนินการถอดออกจากเว็บไซต์โดยทันที</p>
              </div>
            
          <div class="col l4 offset-l2 s12" style="overflow: hidden;">
            <h5 class="white-text">Connect</h5>
           <iframe src="https://ghbtns.com/github-btn.html?user=iLek2428&repo=ThailandTVStreaming&type=fork&count=true&size=large" frameborder="0" scrolling="0" width="158px" height="30px"></iframe>

            <br>
            <a href="https://twitter.com/iLek2428" class="twitter-follow-button" data-show-count="true" data-size="large" data-dnt="true">Follow @iLek2428</a>
            <br>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2015 THS Project Theme by <a href="http://materializecss.com/">Materialize</a>
        <a class="grey-text text-lighten-4 right" href="https://creativecommons.org/licenses/by/3.0/th/legalcode">BY License</a>
        </div>
      </div>
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
    <script src="js/jquery.timeago.min.js"></script>  
    <script src="js/prism.js"></script>
    <script src="bin/materialize.js"></script>
    <script src="js/init.js"></script>
    <!-- Twitter Button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65052503-1', 'auto');
  ga('send', 'pageview');

</script>
          
  </body>
</html>