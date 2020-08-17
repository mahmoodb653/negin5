!(function (t) {
	"use strict";
	t(document).ready(function () {
		function e(e, o) {
			e && e.preventDefault();
			var a = tmWoocompare.ajaxurl,
				m = t("div.tm-woocompare-widget-wrapper"),
				p = t("div.tm-woocompare-list");
			(o.isComparePage = !!p.length),
				(o.isWidget = !!m.length),
			("tm_woocompare_update" !== o.action || o.isComparePage || o.isWidget) &&
			(p.addClass(c),
				m.addClass(c),
				t.post(a, o, function (e) {
					p.removeClass(c),
						m.removeClass(c),
					e.success &&
					(o.isComparePage && (t("div.tm-woocompare-wrapper").html(e.data.compareList), t(document).trigger("enhance.tablesaw")),
					o.isWidget && m.html(e.data.widget),
					"tm_woocompare_empty" === o.action && (t(s).removeClass(r).find(".text").text(tmWoocompare.compareText), t(".tm-woocompare-page-button").remove()),
					"tm_woocompare_remove" === o.action &&
					(t(s + "[data-id=" + o.pid + "]")
						.removeClass(r)
						.find(".text")
						.text(tmWoocompare.compareText),
						t(".tm-woocompare-page-button").remove())),
					void 0 !== e.data.counts && t(document).trigger("tm_compare_update_fragments", { response: e.data.counts }),
						n();
				}));
		}
		function o(o) {
			var a = t(o.currentTarget);
			e(o, { action: "tm_woocompare_remove", pid: a.data("id"), nonce: a.data("nonce") });
		}
		function a(t) {
			e(t, { action: "tm_woocompare_empty" });
		}
		function n() {
			t(".tm-woocompare-remove")
				.off("click")
				.on("click", function (t) {
					o(t);
				}),
				t(".tm-woocompare-empty")
					.off("click")
					.on("click", function (t) {
						a(t);
					});
		}
		function m(e, o) {
			t.isEmptyObject(o.response.defaultFragments) ||
			t.each(o.response.defaultFragments, function (e, o) {
				var a = t(e);
				0 === t(".compare-count", a).length ? a.append(tmWoocompare.countFormat.replace("%count%", o)) : a.find(".compare-count").html(o);
			}),
			t.isEmptyObject(o.response.customFragments) ||
			t.each(o.response.customFragments, function (e, o) {
				var a = t(e);
				a.length && a.html(o);
			});
		}
		var c = "loading",
			r = "added in_compare",
			s = "button.tm-woocompare-button";
		t(document).on("tm_compare_update_fragments", m),
			n(),
			(function () {
				t(document).on("click", s, function (o) {
					var a = t(this);
					o.preventDefault();
					var n = tmWoocompare.ajaxurl,
						m = { action: "tm_woocompare_add_to_list", pid: a.data("id"), nonce: a.data("nonce"), single: a.hasClass("tm-woocompare-button-single") };
					a.removeClass(r).addClass(c),
						t.post(n, m, function (o) {
							if ((a.removeClass(c), o.success)) {
								switch (o.data.action) {
									case "add":
										t(s + "[data-id=" + m.pid + "]")
											.addClass(r)
											.find(".text")
											.text(tmWoocompare.removeText),
										o.data.comparePageBtn && a.after(o.data.comparePageBtn);
										var x = '<a href="https://www.midascharm.com/compare/" target="_blank">برای رفتن به لیست مقایسه کلیک کنید.</a>';
										document.getElementById("notif-compare").innerHTML = x;
										break;
									case "remove":
										t(s + "[data-id=" + m.pid + "]")
											.removeClass(r)
											.find(".text")
											.text(tmWoocompare.compareText),
											t(".tm-woocompare-page-button").remove();
										var x = '<a>از لیست مقایسه حذف شد.</a>';
										document.getElementById("notif-compare").innerHTML = x;
								}
								e(null, (m = { action: "tm_woocompare_update" }));
							}
							void 0 !== o.data.counts && t(document).trigger("tm_compare_update_fragments", { response: o.data.counts });
						});
				});
			})(),
			(function () {
				t.ajax({ url: tmWoocompare.ajaxurl, type: "get", dataType: "json", data: { action: "tm_compare_get_fragments" } }).done(function (e) {
					t(document).trigger("tm_compare_update_fragments", { response: e.data });
				});
			})();
	});
})(jQuery);
