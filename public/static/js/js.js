var regex = {
    mobile: /^1([38][0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|9[89])\d{8}$/,
    email: /^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/,
    chinese_characters: /.*[\u4e00-\u9fa5]+.*$/
};

$(function() {
	$(document)
		.on('click', 'a.gotop', function() {
			$(window).scrollTop(0)
		})
		.on('click', '.navbar-nav li.item', function() {
			$(this).addClass('active').siblings().removeClass('active');
		})
		.on('click', '.navbar-nav li', function() {
			$(".navbar-collapse").removeClass('in');
		})
		
	$(".focusSilde").slide({mainCell:".bd ul.focusContent",effect:"leftLoop",vis:"auto",autoPlay:true,});

	jQuery(".slideTxtBox").slide({effect:"leftLoop"});

	
	
	//
	$('.caselist li').hover(
		function() {
			$(this).find('.item-info').animate({
				'top':'0',
				'left':'15px'
			});
		},
		function() {
			$(this).find('.item-info').animate({
				'top':'192px',
				'left':'15px'
			});
		}
	);
	
	
	$('.strategics li,.scene-group .scene-item').hover(
		function() {
			$(this).addClass("active").siblings().removeClass("active");

		},
		function() {
			$(this).removeClass("active");

		}
	)
	
	

	$('.solid-item-hd img,.chain-item-hd img,.serv-icon img,.icon-solve,.slideTxtBox .icon').hover(
		function() {
			$(this).addClass('animated rotateIn').siblings().removeClass('animated rotateIn');
		},
		function() {
			$(this).removeClass('animated rotateIn')
		}
	)











	
	
	
});

//图片懒加载
function img_lazyload(){
    $("img.lazy_load").lazyload({
        threshold : 50,
        effect : "fadeIn", //淡入效果
        skip_invisible : true
    })
}

img_lazyload();

//格式化数字
function number_format(num) {
    var result = [ ], counter = 0;
    num = (num || 0).toString().split('');
    for (var i = num.length - 1; i >= 0; i--) {
        counter++;
        result.unshift(num[i]);
        if (!(counter % 3) && i != 0) { result.unshift(','); }
    }
    return result.join('');
}

//时间格式化
Date.prototype.Format = function (fmt) {
    var o = {
        "M+": this.getMonth() + 1,
        //月份
        "d+": this.getDate(),
        //日
        "h+": this.getHours(),
        //小时
        "m+": this.getMinutes(),
        //分
        "s+": this.getSeconds(),
        //秒
        "q+": Math.floor((this.getMonth() + 3) / 3),
        //季度
        "S": this.getMilliseconds() //毫秒
    };
    if (/(y+)/.test(fmt)) {
        fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    }
    for (var k in o) {
        if (new RegExp("(" + k + ")").test(fmt)) {
            fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
        }
    }
    return fmt;
};