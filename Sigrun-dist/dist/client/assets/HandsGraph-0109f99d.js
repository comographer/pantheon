import{_ as c,u as i}from"./index-b3f16fe8.js";import{r as u,u as d,g as p,j as y}from"./vendor-6c7c893d.js";const g=u.lazy(()=>c(()=>import("./BarGraph-2a39bb93.js"),["assets/BarGraph-2a39bb93.js","assets/vendor-6c7c893d.js"])),h=({handValueStat:l})=>{const n=i(),o=d(),s=p().colorScheme==="dark";if(!l)return null;const a={1:0,2:0,3:0,4:0,5:0,6:0,7:0,8:0,9:0,10:0,11:0,12:0};l.forEach(r=>a[r.hanCount]=r.count);let t=0;const e=[];for(let r=1;r<13;r++)a[r]>=0?e.push({x:r.toString(),y:a[r]}):t+=a[r];return e.push({x:"★",y:t>0?t:0}),y.jsx(g,{data:{datasets:[{data:e}]},options:{backgroundColor:s?o.colors.blue[8]:o.colors.blue[3],borderColor:s?o.colors.blue[8]:o.colors.blue[3],color:s?o.colors.gray[2]:o.colors.dark[7],font:{size:16,family:'"PT Sans Narrow", Arial'},plugins:{legend:{display:!1},tooltip:{enabled:!0}},scales:{x:{grid:{color:s?o.colors.gray[8]:o.colors.gray[3]},ticks:{autoSkip:!1},position:"bottom",title:{display:!0,text:n._t("Hands value")}},y:{grid:{color:s?o.colors.gray[8]:o.colors.gray[3]}}}}})};export{h as HandsGraph,h as default};
