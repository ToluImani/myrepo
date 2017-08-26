tlbApp.lazy.controller("HomeController",["$scope","$state","model","filterFilter","global","cookieHelper","$timeout","gtmService","modalProvider","dataFactory","showCountrySelectionHome","$rootScope","appTheme",function(e,t,r,i,n,o,s,c,l,a,d,u,p){var y=[{id:0,na:"en"==r.lang?"All Cuisines":"جميع المطابخ",sl:"all"}];if(Array.prototype.unshift.apply(r.cuisines,y),e.model=r,e.global=n,e.langprefix="en"==r.lang?"/":"/ar/",e.errors={selectAreaError:!1,selectCityError:!1},d&&l.countrySelectionPopup(r.countries),r.addresses)var f=r.addresses.map(function(e){return e.id=e.aid,e.an=e.an+" ("+e.pn+")",e});var g=_.find(r.seoContent.spi,{st:13});g&&g.ex&&(e.h1Text=g.ex),$(window).width()<768?(e.ismobile=!0,p?e.bgimage="url(/images/talabat/theme2-mob-bg.jpg)":e.bgimage="url(/images/talabat/mobile-bg1.jpg)"):r.seoContent.bi[0]?e.bgimage="#000 url("+r.baseUrl+r.seoContent.bi[0].nm+") no-repeat top":p?e.bgimage="url(/images/talabat/foodback_jo.jpg) center top no-repeat rgb(0, 0, 0)":e.bgimage="#000";var m,A=null,C=!1;r.fromServerSide&&r.landingBanner&&!o.getHomePagePopup()&&!n.adblockEnabled&&l.bannerAdPopup("home",function(){o.setHomePagePopup()});var b=function(){var e=h();return f&&f.length&&(f[0].firstInGroup=!0,f[0].cn="en"==n.lng?"My Addresses":"عناويني",Array.prototype.unshift.apply(e,f)),e},v=function(){var e=h();if(f&&f.length){var t=_.cloneDeep(f),r=_(t).groupBy("cid").map(function(e){return e[0].firstInGroup=!0,e[0].cn="en"==n.lng?"My Addresses":"عناويني",e}).flatten().value();Array.prototype.unshift.apply(e,r)}return e},h=function(){var e=_.cloneDeep(r.areas),t=_(e).groupBy("cid").map(function(e){return e[0].firstInGroup=!0,e}).flatten().value();return t};if(r.country.iscity){var S=o.getCity();if(S)var w=_.find(e.model.cities,{id:parseInt(S)});var E=v(),P=_.groupBy(E,"cid");e.currentAreas=w?P[String(S)]:[],e.clearCity=function(){e.selection.selectedCity=void 0,e.selection.selectedArea=void 0,s(function(){$(".cityInput").focus()})},e.citySelected=function(t,r,i,n){e.selection.selectedCity=t,e.currentAreas=P[String(t.id)],setTimeout(function(){$(".areainput").focus()},10),e.errors.selectAreaError=!1},e.hideCitytooltip=function(){e.errors.selectCityError=!1}}else e.groupedAreas=b();e.areaSelected=function(t){c.gtm_areaSelection(t.id),m&&m.abort(),(m=a.prefetchList(t.id,n.country.sl)).then(function(t){window.prefetchedList=t,clearTimeout(A),m=null,C?(C=!1,e.findRestaurants()):A=setTimeout(function(){window.prefetchedList=null},12e4)},function(e){console.info("Error:",e)})};var I,k=void 0;if(I=o.getArea(),I&&(k=_.find(e.model.areas,{id:parseInt(I)}),e.areaSelected({id:parseInt(I)})),n.customer){var T=o.getCustomerAddress();if(T){var L=_.find(f,{eid:T});L&&(k=L)}}e.selection={selectedCity:w?w:void 0,selectedArea:k?k:void 0,selectedCuisine:void 0},e.hideAreatooltip=function(){e.errors.selectAreaError=!1,e.selection.selectedArea||!r.country.iscity||e.selection.selectedCity||(e.errors.selectCityError=!0)},e.clearArea=function(){!e.selection.selectedCity&&r.country.iscity?e.errors.selectCityError=!0:e.areaTypeAheadOpen||(e.selection.selectedArea=void 0,s(function(){$(".areainput").focus()}))},e.clearCuisine=function(){e.cuisineTypeAheadOpen||(e.selection.selectedCuisine=void 0,s(function(){$(".cuisinesInput").focus()}))},e.cuisineSelected=function(t){c.gtm_cuisineSelection(e.selection.selectedCuisine.sl)},e.homeBannerClicked=function(e){$(window).width()>767&&"banner-home"==e.target.id&&r.seoContent.bi[0].rid&&t.go("main.infopage",{cnt:r.country.sl,restSlug:r.seoContent.bi[0].sl})};var B;e.resetSelection=function(t){switch(B){case 1:e.selection.selectedArea=void 0,e.citySelected(t);break;case 2:e.selection.selectedArea=t,e.areaSelected(t);break;case 3:e.selection.selectedCuisine=t,e.cuisineSelected(t)}},e.mobilePopup=function(t){if(2==t&&e.model.country.iscity&&!e.selection.selectedCity)return void(e.errors.selectCityError=!0);var i;switch(B=t,e.errors.selectCityError=!1,e.errors.selectAreaError=!1,t){case 1:i=e.model.cities;break;case 2:i=r.country.iscity?e.currentAreas:e.groupedAreas;break;case 3:i=e.model.cuisines}l.selectionPopup(t,i,e.resetSelection)},e.openLoginPopup=function(){l.loginPopup()},e.findRestaurants=function(){m?(C=!0,u.showLoading()):e.selection.selectedArea?(c.gtm_addresssub(e.selection.selectedArea.id,e.selection.selectedCity,n.country),o.setArea(e.selection.selectedArea.id,e.selection.selectedArea.an,e.selection.selectedArea.sl),r.country.iscity&&o.setCity(e.selection.selectedCity.id),n.customer&&e.selection.selectedArea.eid&&o.setCustomerAddress(e.selection.selectedArea.eid),e.selection.selectedCuisine&&e.selection.selectedCuisine.id?t.go("main.restaurantList",{cnt:r.country.sl,areaId:e.selection.selectedArea.id,areaSlug:e.selection.selectedArea.sl,cuisinetype:e.selection.selectedCuisine.id}):t.go("main.restaurantList",{cnt:r.country.sl,areaId:e.selection.selectedArea.id,areaSlug:e.selection.selectedArea.sl})):r.country.iscity&&!e.selection.selectedCity?e.errors.selectCityError=!0:e.errors.selectAreaError=!0},e.$on("$destroy",function(){clearTimeout(A)})}]);