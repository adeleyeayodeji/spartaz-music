"use strict";

function hidePreloader() {
  jQuery(document).ready(function (e) {
    e(".preloader").delay(1e3).fadeOut(500),
      setTimeout(function () {
        e("body.loading").removeClass("loading");
      }, 1e3);
  });
}
window.addEventListener("load", hidePreloader, !1),
  jQuery(document).ready(function (e) {
    function a(e) {
      var a = Math.floor(e),
        i = Math.floor(a / 60);
      return (
        (i = i >= 10 ? i : "0" + i),
        (a = Math.floor(a % 60)),
        (a = a >= 10 ? a : "0" + a),
        i + ":" + a
      );
    }

    function i(a) {
      var i = e(a.target),
        s = i.hasClass("mejs__horizontal-volume-total")
          ? i
          : i.hasClass("mejs__horizontal-volume-slider")
          ? i.find(".mejs__horizontal-volume-total")
          : i
              .parents(".mejs__horizontal-volume-slider")
              .find(".mejs__horizontal-volume-total"),
        t = s.width(),
        o = s.offset(),
        n = void 0 !== a.pageX ? a.pageX - o.left : 0,
        l = n / t;
      e(".mejs__horizontal-volume-current").css({
        left: 0,
        width: 100 * l + "%"
      }),
        f.setVolume(l);
    }

    function s() {
      function a(a) {
        var i = e(".js-video-slider"),
          s = i.find(".video__column:not(:first-child)"),
          t = s.find(".video__placeholder"),
          o = "";
        t.each(function (e, i) {
          0 == e && (o += '<li class="video__column">'),
            (o += i.outerHTML),
            (e + 1) % a == 0 && (o += '</li><li class="video__column">'),
            e == t.length && (o += "</li>");
        }),
          s.remove(),
          i.find(".uk-slider-items").append(o);
      }
      l[0].innerWidth < 767
        ? 1 != j && (a(1), (j = 1))
        : l[0].innerWidth >= 768 && l[0].innerWidth < n.l
        ? 2 != j && (a(2), (j = 2))
        : 3 != j && (a(3), (j = 3));
    }

    function t() {
      e(".video, .news").each(function (a, i) {
        var s = e(i).find(".uk-slider"),
          t = e(i).find(".uk-slidenav-next"),
          o = e(i).find(".uk-slidenav-previous");
        if (l[0].innerWidth >= 1920) {
          var n = (l[0].innerWidth - s.innerWidth()) / 2;
          t.css("right", t.width() - n), o.css("left", o.width() - n);
        } else t.css("right", 0), o.css("left", 0);
      });
    }

    function o(a) {
      var i = a,
        s = !1,
        t = {
          success: "Your message was successfully sent!",
          fail: "Can not send message, mail server configutation bug, please try again later",
          empty: "Please enter fields and try again",
          error: "Please enter require field(s)",
          unknown: "Unknown error"
        },
        o = "";
      return (
        i.find('input:not([type="submit"]), textarea').each(function (a, i) {
          var n = e(this);
          void 0 !== n.attr("data-require") &&
            "true" === n.attr("data-require") &&
            "" === n.val() &&
            ((o = t.error), n.addClass("js-field-error"), (s = !0));
        }),
        s ||
          e
            .post("mail.html", i.serialize(), function (e) {
              (o =
                "success" === e
                  ? t.success
                  : "fail" === e
                  ? t.fail
                  : "empty" === e
                  ? t.empty
                  : t.unknown),
                i.find(".js-respond").text(o);
            })
            .fail(function (e) {
              console.error(e),
                UIkit.modal.dialog(
                  '<p class="uk-modal-body c-dark">' + t.unknown + "</p>"
                );
            }),
        i.find(".js-respond").text(o),
        !1
      );
    }
    const n = { s: 640, m: 960, l: 1200, xl: 1600 };
    var l = e(window);
    "ontouchstart" in window && e("body").addClass("is-touch");
    var d = !1;
    if (
      (l.on("load scroll resize", function () {
        l[0].innerWidth >= n.m
          ? l.scrollTop() > l[0].innerHeight
            ? d
              ? (d = !1)
              : (e(".panel").fadeIn(), (d = !0))
            : d
            ? (d = !1)
            : (e(".panel").fadeOut(), (d = !0))
          : d
          ? (d = !1)
          : (e(".panel").fadeIn(), (d = !0));
      }),
      UIkit.scrollspyNav(".js-scrollspy-nav", {
        closest: "li",
        scroll: !0,
        offset: l[0].innerWidth >= n.m ? 80 : 20
      }),
      e(".js-offcanvas-nav").on("click", "a", function () {
        UIkit.offcanvas("#offcanvas-nav").hide();
      }),
      e(".js-intro-title").length)
    )
      for (
        var r = e(".uk-slideshow-items li"),
          u = r.find(".js-intro-title"),
          c = "",
          m = "",
          p = 0;
        p < u.length;
        p++
      ) {
        c = u.eq(p).text().split(" ");
        for (var v = 0; v < c.length; v++) m += "<span>" + c[v] + "</span>";
        u.eq(p).after(m), (m = "");
      }
    var f = null,
      _ = e(".js-audio"),
      h = e(".albums--list .albums__item"),
      y = e(".js-panel-play"),
      C = e(".js-audio-play"),
      g = e(".js-audio-volume, .js-panel-volume");
    e(".albums__item").on("click", function (a) {
      a.preventDefault(),
        e("html, body").animate(
          {
            scrollTop:
              e(".music").offset().top - (l[0].innerWidth >= n.m ? 80 : 20)
          },
          500
        );
    }),
      _.attr("src", e(".js-audio-items .list__item").eq(0).data("audio")),
      _.mediaelementplayer({
        startVolume: 1,
        features: [],
        success: function (i, s, t) {
          f = i;
          var o = null,
            n = e(".list__item--active");
          n.data("audio");
          i.addEventListener(
            "playing",
            function () {
              var s = i.getCurrentTime();
              s < 1
                ? e(".list__item--active .js-audio-time").text(a(s))
                : e(".list__item--active .js-audio-time").text(a(s + 1)),
                (o = setInterval(function () {
                  i.getCurrentTime() > i.duration && clearInterval(o),
                    e(".list__item--active .js-audio-time").text(
                      a(i.getCurrentTime() + 1)
                    );
                }, 1e3));
              var t = e(".list__item--active").parents(".playlist").index();
              h
                .removeClass("albums--playing")
                .eq(t)
                .addClass("albums--playing"),
                setTimeout(function () {
                  h.removeClass("albums--paused"),
                    y.hasClass("icon--play") &&
                      y.removeClass("icon--play").addClass("icon--pause");
                }, 100);
            },
            !0
          ),
            i.addEventListener("pause", function () {
              clearInterval(o),
                e(".albums--playing").addClass("albums--paused"),
                y.hasClass("icon--pause") &&
                  y.removeClass("icon--pause").addClass("icon--play");
            }),
            i.addEventListener(
              "ended",
              function () {
                var a = e(".list__item--active"),
                  i = a.next();
                clearInterval(o),
                  a
                    .find(".js-audio-play, .js-panel-play")
                    .removeClass("icon--pause")
                    .addClass("icon--play"),
                  e(".list__item").removeClass("list__item--active"),
                  h.removeClass("albums--playing"),
                  a.find(".js-audio-time").text(""),
                  0 != i.length &&
                    (f.setSrc(i.data("audio")),
                    f.play(),
                    i.addClass("list__item--active"),
                    i
                      .find(".js-audio-play")
                      .removeClass("icon--play")
                      .addClass("icon--pause"));
              },
              !0
            );
        },
        error: function () {
          UIkit.modal.dialog(
            '<p class="uk-modal-body c-dark">Error of audio file</p>'
          );
        }
      }),
      f
        ? (y.on("click", function (a) {
            a.preventDefault();
            var i = e(this);
            f.paused
              ? (e(".list__item").hasClass("list__item--active")
                  ? e(".list__item--active .js-audio-play")
                      .removeClass("icon--play")
                      .addClass("icon--pause")
                  : e(".list__item")
                      .eq(0)
                      .find(".js-audio-play")
                      .removeClass("icon--play")
                      .addClass("icon--pause"),
                i.removeClass("icon--play").addClass("icon--pause"),
                e(".list__item--active .icon--play")
                  .removeClass("icon--play")
                  .addClass("icon--pause"),
                f.play(),
                e(".js-audio-items .list__item").hasClass(
                  "list__item--active"
                ) ||
                  e(".js-audio-items .list__item")
                    .eq(0)
                    .addClass("list__item--active"))
              : (i.removeClass("icon--pause").addClass("icon--play"),
                e(".js-audio-play.icon--pause")
                  .removeClass("icon--pause")
                  .addClass("icon--play"),
                f.pause());
          }),
          C.on("click", function (a) {
            a.preventDefault();
            var i = e(this),
              s = e(".list__item--active"),
              t = i.parent(".list__item"),
              o = t.data("audio");
            e(".list__item").removeClass("list__item--active"),
              t.addClass("list__item--active"),
              f.paused
                ? (_.attr("src") !== o &&
                    (s.find(".js-audio-time").text(""), f.setSrc(o)),
                  i.add(y).removeClass("icon--play").addClass("icon--pause"),
                  f.play())
                : (e(".js-audio-play.icon--pause")
                    .add(y)
                    .removeClass("icon--pause")
                    .addClass("icon--play"),
                  f.pause(),
                  _.attr("src") !== o &&
                    (s.find(".js-audio-time").text(""),
                    f.setSrc(o),
                    i.add(y).removeClass("icon--play").addClass("icon--pause"),
                    f.play(),
                    e(".list__item--active").removeClass("list__item--active"),
                    t.addClass("list__item--active")));
          }),
          g
            .on("mousedown", function (a) {
              window.panelVolumeSlide = e(this).on(
                "mousemove",
                { e: event },
                i
              );
            })
            .on("mouseup", function () {
              "undefined" != typeof panelVolumeSlide &&
                panelVolumeSlide.off("mousemove");
            })
            .on("mouseleave", function () {
              "undefined" != typeof panelVolumeSlide &&
                panelVolumeSlide.off("mousemove");
            })
            .on("click", { e: event }, i))
        : UIkit.modal.dialog(
            '<p class="uk-modal-body c-dark">Error of audio file</p>'
          );
    var j = 3;
    s(),
      l.on("resize", s),
      e(".js-video-target").on("click", function (a) {
        a.preventDefault(), e(".modal__video video").remove();
        var i = e(this).data("video-src"),
          s = e(this).data("video-type");
        e(".modal__video").append(
          '<video controls preload="auto"><source src="" type=""></video>'
        ),
          e(".modal__video source").attr({ src: i, type: s }),
          UIkit.modal("#modal-video").show(),
          e(".modal__video video").mediaelementplayer({
            startVolume: 1,
            alwaysShowControls: !0,
            stretching: "responsive",
            videoVolume: "horizontal",
            success: function (e, a, i) {
              f.paused || f.pause(), e.play();
            },
            error: function (e, a, i) {
              UIkit.modal.dialog(
                '<p class="uk-modal-body c-dark">Error of video file</p>'
              );
            }
          });
      }),
      UIkit.util.on("#modal-video", "hidden", function () {
        e("#modal-video .mejs__video").remove();
      }),
      t(),
      l.on("resize", t),
      e(".js-form").submit(function () {
        return o(e(this)), !1;
      }),
      e(".js-form")
        .find('input:not([type="submit"]), textarea')
        .bind("change paste keyup", function () {
          var a = e(this),
            i = a.parents(".js-form").find(".js-respond");
          e(this).hasClass("js-field-error") &&
            e(this).removeClass("js-field-error"),
            "" !== i.text() && i.text("");
        }),
      e.instagramFeed({
        username: "spartaz_dtd",
        get_data: !0,
        callback: function (a) {
          for (
            var i = a.edge_owner_to_timeline_media.edges,
              s = i.length < 5 ? i.length : 5,
              t = "",
              o = 0;
            o < s;
            o++
          )
            t +=
              '<div><a href="https://www.instagram.com/p/' +
              i[o].node.shortcode +
              '" target="_blank" class="cover__photo uk-background-cover uk-transition-toggle ' +
              (2 == o
                ? "uk-visible@s"
                : 3 == o || 4 == o
                ? "uk-visible@m"
                : "") +
              '" src="' +
              i[o].node.thumbnail_src +
              '" data-src="' +
              i[o].node.thumbnail_src +
              '" data-uk-img><span class="cover__link uk-box-shadow-large fab fa-instagram uk-transition-scale-up"></span></a></div>';
          e("#instafeed").html(t);
        }
      }),
      e(".js-scrollbar").mCustomScrollbar(),
      UIkit.util.on(".js-modal-article", "show", function () {
        function a() {
          if (i.find('[class^="cover__photo"]') && i.find(".js-scrollbar")) {
            var e = i.find('[class^="cover__photo"]'),
              a = e.innerHeight(),
              s = i.find(".js-scrollbar"),
              t = s.parent(),
              o = parseInt(t.css("padding-top")),
              n = parseInt(t.css("padding-bottom"));
            i.find(".js-scrollbar").css("max-height", a - o - n);
          }
        }
        var i = e(this);
        a(), (window.resizeCSB = l.on("resize", a));
      }),
      UIkit.util.on(".js-modal-article", "hidden", function () {
        resizeCSB.off("resize");
      });
  });
