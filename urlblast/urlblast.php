/**
* @act      子域名扫描
* @version  1.0
* @author   youngxj
* @date     2018-03-24
* @url      http://www.youngxj.cn
*/
<?php
include '../function/function.php';
encryption();
?>
var cache=getCookie('cache_url');
$('#form-control').val(cache);
control('请输入域名：');
var dist = ["www", "mail", "ftp", "smtp", "pop", "m", "webmail", "pop3", "imap", "localhost", "autodiscover", "admin", "bbs", "test", "mx", "en", "email", "wap", "blog", "oa", "ns1", "vpn", "ns2", "www2", "mysql", "webdisk", "dev", "old", "news", "calendar", "shop", "potala", "mobile", "web", "sip", "mobilemail", "ns", "cpanel", "www1", "whm", "new", "img", "search", "support", "mail2", "media", "files", "e", "video", "app", "secure", "my", "crm", "intranet", "portal", "demo", "api", "beta", "fax", "lyncdiscover", "dns", "images", "db", "staging", "info", "docs", "static", "ns3", "download", "forum", "cms", "cdn", "www3", "wiki", "pda", "dns1", "home", "mail1", "online", "sso", "lists", "webproxy", "office", "dns2", "get", "t", "gis", "proxy", "pic", "edu", "d", "ns4", "cs", "cn", "b2b", "store", "community", "start", "services", "wx", "service", "training", "remote", "health", "help", "vip", "soft", "finance", "photo", "apps", "owa", "login", "es", "s", "ads", "stats", "events", "forums", "sc", "tv", "data", "jobs", "survey", "it", "hr", "sms", "game", "stage", "i", "send", "member", "v", "a", "ww", "sz", "live", "im", "go", "chat", "3g", "gateway", "library", "ftp2", "dialin", "security", "meet", "upload", "w", "blogs", "de", "image", "msoid", "hk", "down", "gmail", "ssh", "fr", "english", "exchange", "so", "av", "cp", "erp", "cloud", "legacy", "ldap", "ad", "sites", "access", "archive", "job", "connect", "hq", "alumni", "downloads", "extranet", "lib", "tools", "careers", "wt", "ask", "student", "host", "ns5", "helpdesk", "u", "vc", "status", "direct", "rs", "hb", "sp", "mailhost", "uk", "netmang", "svn", "tz", "ms", "sx", "zb", "metrics", "mx2", "hd", "ss", "qa", "dj", "www4", "bm", "jp", "file", "project", "club", "dl", "feeds", "IN", "ent", "ws", "food", "update", "tj", "book", "as", "gb", "lab", "1", "dx", "js", "b", "sh", "cnc", "videos", "dns3", "outlook", "software", "auth", "tw", "preview", "hs", "git", "content", "press", "ir", "cq", "projects", "car", "monitor", "backup", "meeting", "c", "photos", "games", "radio", "gw", "public", "buy", "ssl", "mall", "research", "groups", "pt", "wwww", "forms", "music", "cx", "cj", "techmang", "bj", "math", "res", "mang", "open", "ntp", "w3", "biz", "ca", "map", "ru", "design", "share", "th", "relay", "house", "in", "vpn2", "x", "citrix", "labs", "pub", "education", "jw", "global", "tp", "card", "jk", "f", "gh", "sd", "www5", "rt", "reg", "us", "weather", "newsletter", "ticket", "server", "irc", "apple", "cache", "youth", "rms", "www0", "mx1", "feedback", "fz", "ams", "wh", "reports", "auto", "travel", "cm", "origin", "account", "site", "cc", "p", "vote", "bt", "ems", "manage", "pms", "dk", "sharepoint", "mssql", "partner", "spam", "lt", "link", "user", "tg", "sg", "business", "xx", "ly", "students", "ts", "fs", "vpn1", "dm", "uc", "digital", "cl", "pages", "abc", "brand", "event", "alpha", "sys", "assets", "0", "members", "money", "mdm", "sales", "stat", "local", "be", "tuan", "marketing", "bugs", "mail3", "dy", "time", "stream", "code", "partners", "view", "da", "g", "tr", "inside", "br", "phx", "st", "dms", "jj", "gallery", "wp", "shopping", "promo", "china", "social", "show", "union", "pm", "web1", "test2", "gc", "ja", "kb", "register", "sq", "pc", "maps", "android", "corp", "wireless", "pos", "ce", "rsc", "jira", "accounts", "customer", "jd", "list", "ec", "adm", "web2", "rtx", "corporate", "flash", "developer", "rss", "tour", "wl", "log", "smtp2", "sns", "sf", "cas", "directory", "webdev", "temp", "ps", "q", "idc", "sm", "ks", "bc", "hy", "fx", "tech", "bb", "tao", "weixin", "journal", "updates", "agent", "art", "hg", "ic", "mobi", "cd", "usa", "cr", "hao", "desktop", "ex", "ra", "teacher", "r", "ag", "dc", "jwc", "mrtg", "tu", "sj", "ace", "space", "ft", "lp", "fw", "mailgw", "mis", "co", "investors", "bookstore", "sql", "hermes", "ip", "3", "eq", "sandbox", "client", "css", "catalog", "sports", "sentry", "kr", "internal", "ky", "sy", "investor", "mms", "exam", "transfer", "ga", "summer", "conference", "hotel", "dz", "pro", "doc", "eng", "cf", "registration", "whois", "life", "world", "ae", "sts", "mp", "staff", "id", "push", "enterprise", "bi", "webservices", "idp", "pe", "prod", "mailgate", "top", "yy", "zw", "lms", "edm", "linux", "vps", "nj", "mm", "net", "z", "ml", "webcast", "phone", "manager", "cz", "ids", "smtp1", "work", "mars", "listserv", "campus", "special", "ee", "n", "au", "cw", "pay", "dealer", "barracuda", "6", "pp", "acs", "chem", "nl", "w2", "audio", "family", "xa", "multimedia", "jabber", "click", "international", "ct", "resource", "cal", "mailman", "links", "pl", "2", "stock", "movie", "atlas", "fm", "shanghai", "keys", "mi", "love", "product", "ls", "sb", "ch", "wb", "fb", "qc", "intra", "em", "dw", "cert", "hn", "yp", "noc", "fc", "main", "md", "ww2", "streaming", "master", "ma", "daj", "ny", "print", "bg", "nas", "me", "kids", "archives", "wms", "webadmin", "stu", "xb", "h", "xml", "asp", "server1", "order", "sync", "ftp1", "zp", "asia", "hz", "pa", "power", "signup", "hh", "history", "learning", "password", "nc", "edge", "gg", "storage", "hub", "ess", "yun", "opac", "test1", "jupiter", "fms", "123", "xl", "cvs", "crl", "ocs", "bz", "lb", "newsroom", "pf", "webstats", "market", "radius", "cwc", "tk", "int", "dt", "acc", "rd", "jn", "post", "ys", "cis", "se", "ops", "one", "edit", "testing", "xt", "affiliate", "y", "train", "orion", "j", "mb", "build", "developers", "pr", "s1", "edi", "nb", "ds", "pj", "trac", "ac", "mkt", "ci", "gate", "csc", "mailer", "kf", "www7", "golf", "canada", "imp", "gm", "bugzilla", "development", "nanjing", "ar", "insight", "ns0", "zz", "profile", "ns01", "seo", "gs", "aaa", "law", "about", "act", "mercury", "star", "sam", "parking", "apollo", "dev1", "cgi", "police", "energy", "k", "websphere", "weblogic", "admissions", "gd", "sl", "sk", "mc", "www35", "xf", "free", "website", "faculty", "bio", "bh", "earth", "india", "xh", "ph", "wm", "study", "japan", "gov", "xs", "nagios", "conf", "zeus", "at", "smart", "bk", "win", "rc", "tl", "cps", "ice", "pan", "ah", "bak", "team", "tool", "gl", "ideas", "safety", "s2", "baby", "beijing", "db1", "nz", "ie", "dr", "UN", "athena", "bd", "ceshi", "no", "up", "is", "cg", "iphone", "welcome", "red", "domain", "affiliates", "control", "class", "voip", "gps", "cam", "network", "film", "by", "fi", "track", "nt", "arc", "pluto", "jf", "sdc", "www6", "traveler", "mt", "a1", "telecom", "voice", "arch", "redirect", "drive", "billing", "ccs", "dh", "blue", "arts", "its", "phoenix", "wwwdev", "l", "cy", "webtrends", "books", "redmine", "nic", "webcam", "play", "sport", "ims", "tc", "ns02", "engineering", "sun", "web3", "supplier", "syslog", "mg", "o", "www36", "mirror", "products", "bill", "sa", "tfs", "eas", "loopback", "talk", "mp3", "foundation", "tracker", "mail4", "pk", "college", "housing", "hp", "uploads", "www8", "router", "board", "aws", "gy", "oa1", "green", "fl", "mac", "jm", "chemistry", "mailserver", "plus", "group", "kh", "ricard", "beauty", "aa", "antivirus", "repo", "cat", "discover", "pg", "venus", "center", "dragon", "titan", "hi", "dg", "courses", "pki", "box", "portfolio", "vod", "boss", "jl", "astro", "tt", "solutions", "wwws", "solr", "un", "msg", "hybrid", "la", "mtest", "picard", "ios", "sw", "mas", "tel", "nms", "webapp", "km", "firewall", "bank", "recruit", "tms", "www9", "wsj", "source", "emergency", "read", "lm", "am", "gift", "www43", "nursing", "ht", "img2", "rp", "google", "water", "report", "dp", "iris", "analytics", "neptune", "lady", "guide", "img1", "eshop", "ww1", "db2", "csg", "man", "volunteer", "webserver", "pd", "phpmyadmin", "webmaster", "count", "jt", "eis", "mj", "marketplace", "delta", "computer", "java", "comm", "bs", "focus", "horizon", "jg", "pdf", "guest", "upgrade", "vision", "leo", "lg", "monitoring", "active", "psychology", "ariel", "hl", "nano", "cb", "ces", "haosf", "oss", "hc", "sky", "www37", "logs", "fj", "auction", "lw", "banner", "jr", "ep", "jenkins", "webservice", "happy", "mail01", "tx", "gold", "eps", "app1", "translate", "cdn2", "10", "sos", "saturn", "xg", "sis", "sr", "espanol", "form", "sn", "resources", "py", "gz", "ap", "mantis", "vcs", "wordpress", "solar", "chinese", "contact", "mobil", "www41", "planet", "5", "tm", "internet", "splunk", "bug", "physics", "gsa", "studio", "ty", "ccc", "mta", "4", "jc", "15", "cacti", "sale", "xian", "hpc", "ww3", "singapore", "wy", "com", "ren", "adv", "production", "tb", "mag", "audit", "01", "mo", "w1", "jpk", "loghost", "mse", "sus", "counter", "eagle", "geo", "sec", "mh", "acm", "check", "elasticsearch", "bo", "hf", "adserver", "hongkong", "hot", "vm", "struts", "php", "air", "kj", "feed", "02", "m2", "drm", "sbc", "disk", "trip", "mr", "pics", "ping", "accounting", "cars", "gp", "wow", "nn", "europe", "virtual", "ba", "spider", "core", "che", "dd", "gr", "users", "nib", "zend", "sps", "pin", "homer", "os", "registrar", "faq", "fy", "system", "passport", "matrix", "el", "credit", "ea", "ta", "kk", "safe", "join", "ge", "webaccess", "lc", "movies", "qq", "science", "analysis", "taobao", "mx3", "moa", "flow", "payment", "creative", "echo", "ua", "mini", "sas", "facilities", "cdn1", "8", "gk", "wifi", "bms", "dns4", "v2", "real", "news2", "orange", "jjc", "imail", "ras", "src", "publications", "communications", "ecommerce", "bgs", "ns6", "people", "ro", "nexus", "www01", "test3", "xmpp", "france", "ipv6", "oracle", "sem", "eu", "sou", "orders", "retail", "wc", "lx", "op", "xc", "ares", "find", "alert", "hm", "german", "case", "nginx", "wei", "iss", "engage", "hu", "mailbox", "www14", "tiger", "next", "pma", "gt", "nw", "commerce", "backend", "aj", "lh", "econ", "chicago", "fang", "museum", "ab", "si", "wf", "advertising", "nm", "paper", "elastic", "www34", "sv", "www10", "amp", "yt", "dag", "zs", "www12", "ismart", "moon", "wa", "technology", "school", "www11", "ka", "widget", "ck", "pharmacy", "csr", "taiwan", "president", "bus", "mw", "7", "fk", "jh", "lf", "french", "server5", "mob", "ok", "wd", "2013", "18", "biology", "ddh", "hydra", "reader", "city", "shop2", "kc", "om", "xxx", "galaxy", "gatekeeper", "expo", "wg", "rm", "spanish", "drupal", "ln", "database", "9", "voicemail", "statistics", "sanguo", "pv", "mcs", "af", "robot", "et", "ipad", "query", "fd", "traffic", "he", "mnews", "enroll", "s3", "classic", "m1", "www02", "http", "cmp", "cart", "max", "17", "bf", "action", "philosophy", "att", "smg", "psych", "mv", "ai", "channel", "16", "mailing", "li", "was", "publish", "fun", "20", "bl", "nk", "editor", "external", "smtp3", "rds", "eos", "df", "med", "apex", "grad", "sap", "ko", "vpn3", "jboss", "picwww", "emba", "ext", "manyi", "re", "pingan", "classifieds", "03", "korea", "expert", "knowledge", "po", "voyager", "legal", "devel", "newton", "speed", "lj", "pi", "rz", "touch", "fa", "ics", "quiz", "alerts", "srm", "www15", "style", "io", "soc", "index", "vn", "sol", "11", "ws1", "a2", "abs", "healthcare", "economics", "athletics", "applications", "idea", "td", "www31", "kiosk", "ha", "lian", "ssc", "dir", "junshi", "19", "vega", "sjc", "2012", "oc", "www13", "epaper", "kt", "bw", "zj", "pad", "pass", "academic", "14", "akamai", "cisco", "develop", "wk", "london", "static1", "mz", "eco", "ebook", "on", "sirius", "pegasus", "policy", "gemini", "bca", "artemis", "line3", "aries", "yule", "fp", "gaj", "dsp", "2014", "server2"];
$("#btn_state").click(function() {
	setCookie('cache_url',$('.form-control').val(),365);
	if ($('#user_Dictionary').val()) {
		var strs = new Array();
		var str = $("#user_Dictionary").val();
		console.log(str);
		strs = str.split(",");
		console.log(strs);
		dist = dist.concat(strs);
		console.log(dist);
	}
	query(0, dist);
});
$(".form-control").keydown(function(e) {
	13 == e.keyCode && $("button").click();
})
function query(index, array) {
	var domain = $('.form-control').val();
	if(domain == ""){
		return layer.msg('请填写域名');
	}
	if (index < array.length) {
		$('.form-controlss').show();
		var value = array[index];
		layer.msg('玩命加载中');
		$.ajax({
			type: "get",
			url: "blast.php?domain=" + domain + "&q=" + value,
			async: true,
			dataType: "json",
			success: function(res) {
				$("#content").html(res.domain);
				if (res.status == 200) {
					$("#msg").append("爆破成功：" + res.domain + "-" + res.ip + "<br/>")
				}
				if (index < array.length) {
					query(index + 1, array);
					layer.msg('玩命加载中');
				}
			},
			error: function(res) {
				$("#msg").append("连接错误，请重试");
				layer.msg('连接错误，请重试');
			}
		});
	}else{
		$("#msg").append("扫描完毕");
		layer.msg('扫描完毕');
	}
}
