// 方案4
// designWidth 设计稿宽度
var designWidth = 750, rem2px = 100;
document.documentElement.style.fontSize = 
  ((((window.innerWidth / designWidth) * rem2px) / 16) * 100) + '%';