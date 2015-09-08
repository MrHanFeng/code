(function($){
	String.prototype.trim=function(){return this.replace(/(^\s*)|(\s*$)/g, "");}
	String.prototype.ltrim=function(){return this.replace(/(^\s*)/g,"");}
	String.prototype.rtrim=function(){return this.replace(/(\s*$)/g,"");}
	/*** 统计指定字符出现的次数 ***/
	String.prototype.Occurs = function(ch) {return this.split(ch).length-1;}
	/*** 检查是否由数字字母和下划线组成 ***/
	String.prototype.isAlpha = function() {return (this.replace(/\w/g, "").length == 0);}
	/*** 检查是否为数 ***/
	String.prototype.isNumber = function() {var s = this.trim();return (s.search(/^[+-]?[0-9.]*$/) >= 0);}
	/*** 返回字节数 ***/
	String.prototype.lenb = function() {return this.replace(/[^\x00-\xff]/g,"**").length;}
	/*** 检查是否包含汉字 ***/
	String.prototype.isInChinese = function() {return (this.length != this.replace(/[^\x00-\xff]/g,"**").length);}
	/*** 简单的email检查 ***/
	String.prototype.isEmail = function() {
		var strr,mail = this,re = /(\w+@\w+\.\w+)(\.{0,1}\w*)(\.{0,1}\w*)/i;
		re.exec(mail);
		if(RegExp.$3!="" && RegExp.$3!="." && RegExp.$2!=".")
			strr = RegExp.$1+RegExp.$2+RegExp.$3;
		else
			if(RegExp.$2!="" && RegExp.$2!=".")
				strr = RegExp.$1+RegExp.$2;
			else
				strr = RegExp.$1;
		return (strr==mail);
	}
	/*** 简单的日期检查，成功返回日期对象 ***/
	String.prototype.isDate = function() {
		var p,
			re1 = /(\d{4})[年./-](\d{1,2})[月./-](\d{1,2})[日]?$/,
			re2 = /(\d{1,2})[月./-](\d{1,2})[日./-](\d{2})[年]?$/,
			re3 = /(\d{1,2})[月./-](\d{1,2})[日./-](\d{4})[年]?$/;
		if(re1.test(this)){p = re1.exec(this);return new Date(p[1],p[2],p[3]);}
		if(re2.test(this)){p = re2.exec(this);return new Date(p[3],p[1],p[2]);}
		if(re3.test(this)){p = re3.exec(this);return new Date(p[3],p[1],p[2]);}
		return false;
	}
	/*** 检查是否有列表中的字符字符 ***/
	String.prototype.isInList = function(list){var re = eval("/["+list+"]/");return re.test(this);}
	/*** 检查是否由数字组成 ***/
	String.prototype.isDigit = function() {var s = this.trim();return (s.replace(/\d/g, "").length == 0);}
	Date.prototype.format = function(format) {  
		/* 
		 * eg:format="yyyy-MM-dd hh:mm:ss"; 
		 */  
		var o = {  
			"M+" : this.getMonth() + 1, // month  
			"d+" : this.getDate(), // day  
			"h+" : this.getHours(), // hour  
			"m+" : this.getMinutes(), // minute  
			"s+" : this.getSeconds(), // second  
			"q+" : Math.floor((this.getMonth() + 3) / 3), // quarter  
			"S" : this.getMilliseconds()  
			// millisecond  
		}  
	  
		if (/(y+)/.test(format)) {  
			format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4  
							- RegExp.$1.length));  
		}  
	  
		for (var k in o) {  
			if (new RegExp("(" + k + ")").test(format)) {  
				format = format.replace(RegExp.$1, RegExp.$1.length == 1  
								? o[k]  
								: ("00" + o[k]).substr(("" + o[k]).length));  
			}  
		}  
		return format;  
	}  
})(jQuery);