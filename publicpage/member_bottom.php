            <div id="trigger20"></div>
        </div><!-- right20 -->
    </div><!-- main20 -->
</div><!-- content20 -->

<script type="text/javascript">
  $(function(){
    var controller = new ScrollMagic.Controller();
    var move  = new ScrollMagic.Scene({
        triggerElement:"#trigger20",
        offset:'-400px'
    })
    .setClassToggle('.left20','move20')
    // .addIndicators({name:'對應點'})
    .addTo(controller);
  });

  // function ChangeStyle(){$("mem_1").css('background-color',"#e97b23");}

  // function connect(){$id("mem_1").addEventListener('click',ChangeStyle,false);};

  // window.onload=connect;

</script>
</div>