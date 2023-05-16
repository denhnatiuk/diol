function scrollToTab(tab, tabcontent){
  document.getElementById(tab).click();
  document.getElementById(tabcontent).scrollIntoView({block: 'end',behavior: 'smooth'})
}

function setCookie(cname, cvalue, minutes) {
  var d = new Date();
  d.setTime(d.getTime() + (minutes*60*1000 || year));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(key){
  if (document.cookie.split(';').find(row => row.startsWith(key))){
      return document.cookie.split(';').find(row => row.startsWith(key)).split('=')[1]
  }
}

const year = 31536000;

function darklightChange (options){
  var opts = options || {
      "name":"darklight"
      ,"defaultClass": "dark"
      ,"lightClass":  ""
      ,"lightIcon":   ""
      ,"darkClass":   "dark"
      ,"darkIcon":   ""
      ,"states": ['dark', 'light']
  };

  if(document.body.classList.contains(opts.darkClass)) {
      document.body.classList.remove(opts.darkClass);
      document.body.classList.add(opts.lightClass);    
      setCookie(opts.lightClass);    
      console.log("set cookie"+ setCookie(opts.lightClass));       
  } else if (document.body.classList.contains(opts.lightClass)) {
      document.body.classList.remove(opts.lightClass);
      document.body.classList.add(opts.darkClass);        
      setCookie(opts.name, opts.darkClass);
  } else {
      if (getCookie('darklight')){
          document.body.classList.add(getCookie('darklight')); 
          console.log("got cookie"+ getCookie('darklight'));       
      }
      document.body.classList.add(opts.defaultClass);        
  }
}