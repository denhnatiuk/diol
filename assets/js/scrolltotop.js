const ScrollToTop = (()=>{

  var instance;

  function init( mountPoint, options ) {

    let opts = options||{
      id:"scrollToTop",
      classList:"btn btn-default"
    };

    function create( opts ){
      let a = document.createElement('button');
      a.id = opts.id;
      a.classList = opts.classList;
      a.onclick = ()=>{
        document.body.scrollIntoView({block: 'start',behavior: 'smooth'})
      };
      a.setAttribute('aria-controls', "prefences-menu");
      a.setAttribute('aria-expanded',"false"); 
      a.setAttribute('aria-label',"Scroll to Top");
      a.setAttribute('alt', "Scroll to Top")
      
      return a;
    }
    
    function mount( mountPoint, opts ){
      let btn = create( opts );
      // let mnt = document.getElementById( mountPoint );
      let mnt = document.querySelector( mountPoint );
      style( opts.id );
      mnt.appendChild( btn );
    }
    
    function style( id ) {
      let sheet = new CSSStyleSheet();

      sheet.replaceSync(`#${ id } {
          position: fixed;
          z-index:1000;
          bottom: 2rem;
          right: 2rem;
          display: block;
          font-size:2rem;
          font-weight:800;
          width: 3rem;
          height: 3rem;
          border-radius: 50%;
          border:0;
          transition: all .5s ease-out;
        }
        #${ id }:after {
          content: "";
          display:block;
          width:1rem;
          height:1rem;
          margin:1rem 0.25rem;
          border-top:2px solid black;
          border-left:2px solid black;
          transform:rotate(45deg);
        }
        #${ id }:hover {
          color:rgba(0,0,0,0.5);
          background:rgba(255,255,255,0.5);
          transition: all .5s ease-out;
        }
        `
      );

      document.adoptedStyleSheets = [...document.adoptedStyleSheets,sheet];
    }

    // console.log( mountPoint );
    return mount( mountPoint, opts );

  };

  return {

    getInstance: ( mountPoint, options ) => {

      if ( !document.querySelector( mountPoint ) ) return;

      if ( !instance ) {
        instance = init( mountPoint, options );
      }
 
      return instance;
    }
  };

})();

ScrollToTop.getInstance( '.sidebar' );