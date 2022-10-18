import{u as _,o as f,c as p,M as h,w as t,b as o,f as m,n as v,a as s,t as c,h as n}from"./app.ac94f828.js";import{_ as b}from"./ActionMessage.3ce7788c.js";import{_ as g}from"./FormSection.4fe7c46e.js";import{_ as w,a as T}from"./TextInput.f405d2c1.js";import{_ as l}from"./InputLabel.3d8c1cda.js";import{_ as x}from"./PrimaryButton.fea07dd7.js";import"./SectionTitle.a667bd8d.js";import"./_plugin-vue_export-helper.cdc0426e.js";const N=n(" Team Name "),S=n(" The team's name and owner information. "),V={class:"col-span-6"},$={class:"flex items-center mt-2"},y=["src","alt"],B={class:"ml-4 leading-tight"},U={class:"text-gray-700 text-sm"},j={class:"col-span-6 sm:col-span-4"},k=n(" Saved. "),O=n(" Save "),H={name:"UpdateTeamNameForm",props:{team:Object,permissions:Object},setup(e){const i=e,a=_({name:i.team.name}),d=()=>{a.put(route("teams.update",i.team),{errorBag:"updateTeamName",preserveScroll:!0})};return(C,r)=>(f(),p(g,{onSubmitted:d},h({title:t(()=>[N]),description:t(()=>[S]),form:t(()=>[s("div",V,[o(l,{value:"Team Owner"}),s("div",$,[s("img",{class:"w-12 h-12 rounded-full object-cover",src:e.team.owner.profile_photo_url,alt:e.team.owner.name},null,8,y),s("div",B,[s("div",null,c(e.team.owner.name),1),s("div",U,c(e.team.owner.email),1)])])]),s("div",j,[o(l,{for:"name",value:"Team Name"}),o(w,{id:"name",modelValue:m(a).name,"onUpdate:modelValue":r[0]||(r[0]=u=>m(a).name=u),type:"text",class:"mt-1 block w-full",disabled:!e.permissions.canUpdateTeam},null,8,["modelValue","disabled"]),o(T,{message:m(a).errors.name,class:"mt-2"},null,8,["message"])])]),_:2},[e.permissions.canUpdateTeam?{name:"actions",fn:t(()=>[o(b,{on:m(a).recentlySuccessful,class:"mr-3"},{default:t(()=>[k]),_:1},8,["on"]),o(x,{class:v({"opacity-25":m(a).processing}),disabled:m(a).processing},{default:t(()=>[O]),_:1},8,["class","disabled"])])}:void 0]),1024))}};export{H as default};