(function(){
    var ua = navigator.userAgent,
    index,
    navigateur,
    version;
if((index = ua.indexOf('Firefox'))>=0) {
    navigateur = 'Firefox';
    version = ua.match(/Firefox\/([0-9]+(?:\.[0-9]+)*)/)[1];
} else if((index = ua.indexOf('MSIE'))>=0) {
    navigateur = 'Internet Explorer';
    version = ua.match(/MSIE ([0-9]+(?:\.[0-9]+)*)/)[1];
} else if((index = ua.indexOf('Chrome'))>=0) {
    navigateur = 'Google Chrome';
    version = ua.match(/Chrome\/([0-9]+(?:\.[0-9]+)*)/)[1];
} else if((index = ua.indexOf('Opera'))>=0) {
    navigateur = 'Opera';
    version = ua.match(/Version\/([0-9]+(?:\.[0-9]+)*)/)[1] || ua.match(/Opera\/([0-9]+(?:\.[0-9]+)*)/)[1];
} else if((index = ua.indexOf('Safari'))>=0) {
    navigateur = 'Safari';
    version = ua.match(/Version\/([0-9]+(?:\.[0-9]+)*)/)[1] || ua.match(/Safari\/([0-9]+(?:\.[0-9]+)*)/)[1];
}
const getDeviceType = function(){
    const ua = navigator.userAgent;
    if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
      return "tablet";
    }
    if (/Mobile|iP(hone|od|ad)|Android|BlackBerry|IEMobile|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(ua)) 
    {
      return "mobile";
    }
      return "desktop";
  };
//   const devc = getDeviceType();
    //  switch (devc) {
    //         case 'mobile': 
    //             // window.location.replace('./m.lesmilleservices.com/');
    //             console.log('device detected successfuly');
    //             break;
    //         case 'tablet': 
    //             // window.location.replace('./m.lesmilleservices.com/');
    //             console.log('device detected successfuly');
    //             break;
    //         case 'desktop':
    //             console.log('device detected successfuly');
    //             break;
    //         default:
    //          console.log('device detected successfuly');
    //          break;
    //  }
})();