const SwitchDark = (()=>{

  var instance;

  function init( mountPoint, options ) {

    let opts = options||{
      id:"SwitchDark",
      bodyClass: "dark",
      classList:"btn btn-block"
    };

    function create( opts ){
      let a = document.createElement('button');
      a.id = opts.id;
      a.classList = opts.classList;
      a.onclick = ()=>{ document.body.classList.toggle( opts.bodyClass )};
      a.setAttribute('aria-controls', "prefences-menu");
      a.setAttribute('aria-expanded',"false"); 
      a.setAttribute('aria-label',"Switch Dark Mode");
      a.setAttribute('alt', "Switch Dark Mode")

      return a;
    }

    function mount( mountPoint, opts ){
      let btn = create( opts );
      let mnt = document.querySelector( mountPoint );
      style( opts.id );
      mnt.appendChild( btn );
    }
    
    function style( id ) {
      let sheet = new CSSStyleSheet();
      sheet.replaceSync(`#${ id } {
          
          display: block;
          min-width: 32px;
          min-height: 32px;
          border-radius: 50%;
          border:0;
        }
        body.dark #${ id }:after {
          content:"🌙";
          display: block;
          position: relative;
          width:2rem;
          height:2rem;
        }
        body:not( .dark ) #${ id }:after {
          content:"☀️";
          display: block;
          position: relative;
          width:2rem;
          height:2rem;
        }
        #${ id }:hover {
          color:black;
          border-color:black;
        }
        `
      );
      document.adoptedStyleSheets = [...document.adoptedStyleSheets, sheet];
    }

    // console.log( mountPoint );
    return mount( mountPoint, opts );

  };

  return {

    getInstance: ( mountPoint, options ) => {

      if ( !instance ) {
        instance = init( mountPoint, options );
      }
 
      return instance;
    }
  };

})();

SwitchDark.getInstance(  '#modal-1-content' );