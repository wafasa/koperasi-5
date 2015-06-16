var Charts = function() {
  return {
    initCharts: function() {
      function e() {
        for (l.length > 0 && (l = l.slice(1)); l.length < d;) {
          var e = l.length > 0 ? l[l.length - 1] : 50,
            t = e + 10 * Math.random() - 5;
          0 > t && (t = 0), t > 100 && (t = 100), l.push(t)
        }
        for (var n = [], i = 0; i < l.length; ++i) n.push([i, l[i]]);
        return n
      }

      function t() {
        for (var e = [], t = 0; t < 2 * Math.PI; t += .25) e.push([t, Math.sin(t)]);
        for (var n = [], t = 0; t < 2 * Math.PI; t += .25) n.push([t, Math.cos(t)]);
        for (var i = [], t = 0; t < 2 * Math.PI; t += .1) i.push([t, Math.tan(t)]);
        $.plot($("#chart_1"), [{
          label: "sin(x)",
          data: e
        }, {
          label: "cos(x)",
          data: n
        }, {
          label: "tan(x)",
          data: i
        }], {
          series: {
            lines: {
              show: !0
            },
            points: {
              show: !0
            }
          },
          xaxis: {
            ticks: [0, [Math.PI / 2, "Ï€/2"],
              [Math.PI, "Ï€"],
              [3 * Math.PI / 2, "3Ï€/2"],
              [2 * Math.PI, "2Ï€"]
            ]
          },
          yaxis: {
            ticks: 10,
            min: -2,
            max: 2
          },
          grid: {
            borderWidth: 0
          },
          colors: ["#6DADBD", "#E25856", "#94B86E", "#FFB848"]
        })
      }

      function n() {
        function e() {
          return Math.floor(21 * Math.random()) + 20
        }

        function t(e, t, n) {
          $('<div id="tooltip">' + n + "</div>").css({
            position: "absolute",
            display: "none",
            top: t + 5,
            left: e + 15,
            border: "1px solid #333",
            padding: "4px",
            color: "#fff",
            "border-radius": "3px",
            "background-color": "#333",
            opacity: .8
          }).appendTo("body").fadeIn(200)
        }
        var n = [
            [1, e()],
            [2, e()],
            [3, 2 + e()],
            [4, 3 + e()],
            [5, 5 + e()],
            [6, 10 + e()],
            [7, 15 + e()],
            [8, 20 + e()],
            [9, 25 + e()],
            [10, 30 + e()],
            [11, 35 + e()],
            [12, 25 + e()],
            [13, 15 + e()],
            [14, 20 + e()],
            [15, 45 + e()],
            [16, 50 + e()],
            [17, 65 + e()],
            [18, 70 + e()],
            [19, 85 + e()],
            [20, 80 + e()],
            [21, 75 + e()],
            [22, 80 + e()],
            [23, 75 + e()],
            [24, 70 + e()],
            [25, 65 + e()],
            [26, 75 + e()],
            [27, 80 + e()],
            [28, 85 + e()],
            [29, 90 + e()],
            [30, 95 + e()]
          ],
          i = [
            [1, e() - 5],
            [2, e() - 5],
            [3, e() - 5],
            [4, 6 + e()],
            [5, 5 + e()],
            [6, 20 + e()],
            [7, 25 + e()],
            [8, 36 + e()],
            [9, 26 + e()],
            [10, 38 + e()],
            [11, 39 + e()],
            [12, 50 + e()],
            [13, 51 + e()],
            [14, 12 + e()],
            [15, 13 + e()],
            [16, 14 + e()],
            [17, 15 + e()],
            [18, 15 + e()],
            [19, 16 + e()],
            [20, 17 + e()],
            [21, 18 + e()],
            [22, 19 + e()],
            [23, 20 + e()],
            [24, 21 + e()],
            [25, 14 + e()],
            [26, 24 + e()],
            [27, 25 + e()],
            [28, 26 + e()],
            [29, 27 + e()],
            [30, 31 + e()]
          ];
        $.plot($("#chart_2"), [{
          data: n,
          label: "Unique Visits"
        }, {
          data: i,
          label: "Page Views"
        }], {
          series: {
            lines: {
              show: !0,
              lineWidth: 2,
              fill: !0,
              fillColor: {
                colors: [{
                  opacity: .05
                }, {
                  opacity: .01
                }]
              }
            },
            points: {
              show: !0
            },
            shadowSize: 2
          },
          grid: {
            hoverable: !0,
            clickable: !0,
            tickColor: "#eee",
            borderWidth: 0
          },
          colors: ["#DB5E8C", "#FFB848", "#5E87B0"],
          xaxis: {
            ticks: 11,
            tickDecimals: 0
          },
          yaxis: {
            ticks: 11,
            tickDecimals: 0
          }
        });
        var o = null;
        $("#chart_2").bind("plothover", function(e, n, i) {
          if ($("#x").text(n.x.toFixed(2)), $("#y").text(n.y.toFixed(2)), i) {
            if (o != i.dataIndex) {
              o = i.dataIndex, $("#tooltip").remove();
              var r = i.datapoint[0].toFixed(2),
                s = i.datapoint[1].toFixed(2);
              t(i.pageX, i.pageY, i.series.label + " of " + r + " = " + s)
            }
          } else $("#tooltip").remove(), o = null
        })
      }

      function i() {
        function e() {
          r = null;
          var e = s,
            t = plot.getAxes();
          if (!(e.x < t.xaxis.min || e.x > t.xaxis.max || e.y < t.yaxis.min || e.y > t.yaxis.max)) {
            var n, i, a = plot.getData();
            for (n = 0; n < a.length; ++n) {
              var l = a[n];
              for (i = 0; i < l.data.length && !(l.data[i][0] > e.x); ++i);
              var d, c = l.data[i - 1],
                u = l.data[i];
              d = null == c ? u[1] : null == u ? c[1] : c[1] + (u[1] - c[1]) * (e.x - c[0]) / (u[0] - c[0]), o.eq(n).text(l.label.replace(/=.*/, "= " + d.toFixed(2)))
            }
          }
        }
        for (var t = [], n = [], i = 0; 14 > i; i += .1) t.push([i, Math.sin(i)]), n.push([i, Math.cos(i)]);
        plot = $.plot($("#chart_3"), [{
          data: t,
          label: "sin(x) = -0.00"
        }, {
          data: n,
          label: "cos(x) = -0.00"
        }], {
          series: {
            lines: {
              show: !0
            }
          },
          crosshair: {
            mode: "x"
          },
          grid: {
            hoverable: !0,
            borderWidth: 0,
            autoHighlight: !1
          },
          yaxis: {
            min: -1.2,
            max: 1.2
          },
          colors: ["#94B86E", "#FCD76A", "#F38630"]
        });
        var o = $("#chart_3 .legendLabel");
        o.each(function() {
          $(this).css("width", $(this).width())
        });
        var r = null,
          s = null;
        $("#chart_3").bind("plothover", function(t, n) {
          s = n, r || (r = setTimeout(e, 50))
        })
      }

      function o() {
        function t() {
          o.setData([e()]), o.draw(), setTimeout(t, i)
        }
        var n = {
            series: {
              shadowSize: 1
            },
            lines: {
              show: !0,
              lineWidth: .5,
              fill: !0,
              fillColor: {
                colors: [{
                  opacity: .4
                }, {
                  opacity: 1
                }]
              }
            },
            yaxis: {
              min: 0,
              max: 100,
              tickFormatter: function(e) {
                return e + "%"
              }
            },
            xaxis: {
              show: !1
            },
            colors: ["#E25856"],
            grid: {
              tickColor: "#a8a3a3",
              borderWidth: 0
            }
          },
          i = 30,
          o = $.plot($("#chart_4"), [e()], n);
        t()
      }

      function r() {
        function e() {
          $.plot($("#chart_5"), [t, i, o], {
            series: {
              stack: r,
              lines: {
                show: a,
                fill: !0,
                steps: l
              },
              bars: {
                show: s,
                barWidth: .6
              }
            },
            grid: {
              borderWidth: 0
            },
            colors: ["#6DADBD", "#FFB848", "#94B86E"]
          })
        }
        for (var t = [], n = 0; 10 >= n; n += 1) t.push([n, parseInt(30 * Math.random())]);
        for (var i = [], n = 0; 10 >= n; n += 1) i.push([n, parseInt(30 * Math.random())]);
        for (var o = [], n = 0; 10 >= n; n += 1) o.push([n, parseInt(30 * Math.random())]);
        var r = 0,
          s = !0,
          a = !1,
          l = !1;
        $(".stackControls input").click(function(t) {
          t.preventDefault(), r = "With stacking" == $(this).val() ? !0 : null, e()
        }), $(".graphControls input").click(function(t) {
          t.preventDefault(), s = -1 != $(this).val().indexOf("Bars"), a = -1 != $(this).val().indexOf("Lines"), l = -1 != $(this).val().indexOf("steps"), e()
        }), e()
      }

      function s() {
        var e = [
            [10, 10],
            [20, 20],
            [30, 30],
            [40, 40],
            [50, 50]
          ],
          t = {
            series: {
              bars: {
                show: !0
              }
            },
            bars: {
              horizontal: !0,
              barWidth: 6
            },
            grid: {
              borderWidth: 0
            },
            colors: ["#F38630"]
          };
        $.plot($("#chart_6"), [e], t)
      }

      function a() {
        function e(e) {
          var t = [],
            n = new Date(e.xaxis.min);
          n.setUTCDate(n.getUTCDate() - (n.getUTCDay() + 1) % 7), n.setUTCSeconds(0), n.setUTCMinutes(0), n.setUTCHours(0);
          var i = n.getTime();
          do t.push({
            xaxis: {
              from: i,
              to: i + 1728e5
            }
          }), i += 6048e5; while (i < e.xaxis.max);
          return t
        }
        for (var t = [
          [11964636e5, 0],
          [119655e7, 0],
          [11966364e5, 0],
          [11967228e5, 77],
          [11968092e5, 3636],
          [11968956e5, 3575],
          [1196982e6, 2736],
          [11970684e5, 1086],
          [11971548e5, 676],
          [11972412e5, 1205],
          [11973276e5, 906],
          [1197414e6, 710],
          [11975004e5, 639],
          [11975868e5, 540],
          [11976732e5, 435],
          [11977596e5, 301],
          [1197846e6, 575],
          [11979324e5, 481],
          [11980188e5, 591],
          [11981052e5, 608],
          [11981916e5, 459],
          [1198278e6, 234],
          [11983644e5, 1352],
          [11984508e5, 686],
          [11985372e5, 279],
          [11986236e5, 449],
          [119871e7, 468],
          [11987964e5, 392],
          [11988828e5, 282],
          [11989692e5, 208],
          [11990556e5, 229],
          [1199142e6, 177],
          [11992284e5, 374],
          [11993148e5, 436],
          [11994012e5, 404],
          [11994876e5, 253],
          [1199574e6, 218],
          [11996604e5, 476],
          [11997468e5, 462],
          [11998332e5, 448],
          [11999196e5, 442],
          [1200006e6, 403],
          [12000924e5, 204],
          [12001788e5, 194],
          [12002652e5, 327],
          [12003516e5, 374],
          [1200438e6, 507],
          [12005244e5, 546],
          [12006108e5, 482],
          [12006972e5, 283],
          [12007836e5, 221],
          [120087e7, 483],
          [12009564e5, 523],
          [12010428e5, 528],
          [12011292e5, 483],
          [12012156e5, 452],
          [1201302e6, 270],
          [12013884e5, 222],
          [12014748e5, 439],
          [12015612e5, 559],
          [12016476e5, 521],
          [1201734e6, 477],
          [12018204e5, 442],
          [12019068e5, 252],
          [12019932e5, 236],
          [12020796e5, 525],
          [1202166e6, 477],
          [12022524e5, 386],
          [12023388e5, 409],
          [12024252e5, 408],
          [12025116e5, 237],
          [1202598e6, 193],
          [12026844e5, 357],
          [12027708e5, 414],
          [12028572e5, 393],
          [12029436e5, 353],
          [120303e7, 364],
          [12031164e5, 215],
          [12032028e5, 214],
          [12032892e5, 356],
          [12033756e5, 399],
          [1203462e6, 334],
          [12035484e5, 348],
          [12036348e5, 243],
          [12037212e5, 126],
          [12038076e5, 157],
          [1203894e6, 288]
        ], n = 0; n < t.length; ++n) t[n][0] += 36e5;
        var i = {
            series: {
              lines: {
                show: !0,
                lineWidth: 2,
                fill: !0,
                fillColor: {
                  colors: [{
                    opacity: .05
                  }, {
                    opacity: .01
                  }]
                }
              },
              points: {
                show: !0
              },
              shadowSize: 2
            },
            xaxis: {
              mode: "time",
              tickLength: 5
            },
            selection: {
              mode: "x",
              color: "#5E87B0"
            },
            colors: ["#5E87B0", "#37b7f3", "#52e136"],
            grid: {
              markings: e,
              hoverable: !0,
              clickable: !0,
              tickColor: "#eee",
              borderWidth: 0
            }
          },
          o = $.plot("#placeholder", [t], i),
          r = $.plot("#overview", [t], {
            series: {
              lines: {
                show: !0,
                lineWidth: 1
              },
              shadowSize: 1
            },
            colors: ["#5E87B0", "#37b7f3", "#52e136"],
            xaxis: {
              mode: "time"
            },
            yaxis: {
              ticks: [],
              min: 0,
              autoscaleMargin: .1
            },
            selection: {
              mode: "x",
              color: "#5E87B0"
            },
            grid: {
              hoverable: !0,
              clickable: !0,
              tickColor: "#eee",
              borderWidth: 0
            }
          });
        $("#placeholder").bind("plotselected", function(e, n) {
          o = $.plot("#placeholder", [t], $.extend(!0, {}, i, {
            xaxis: {
              min: n.xaxis.from,
              max: n.xaxis.to
            }
          })), r.setSelection(n, !0)
        }), $("#overview").bind("plotselected", function(e, t) {
          o.setSelection(t)
        })
      }
      if (jQuery.plot) {
        var l = [],
          d = 250;
        t(), n(), a(), i(), o(), r(), s()
      }
    },
    initPieCharts: function() {
      var e = [],
        t = Math.floor(10 * Math.random()) + 1;
      t = 5 > t ? 5 : t;
      for (var n = 0; t > n; n++) e[n] = {
        label: "Series" + (n + 1),
        data: Math.floor(100 * Math.random()) + 1
      };
      $.plot($("#pie_chart"), e, {
        series: {
          pie: {
            show: !0
          }
        },
        colors: ["#E25856", "#94B86E", "#FFB848", "#6DADBD", "#DB5E8C", "#FCD76A", "#A696CE"]
      }), $.plot($("#donut"), e, {
        series: {
          pie: {
            innerRadius: .5,
            show: !0
          }
        },
        colors: ["#E25856", "#94B86E", "#FFB848", "#6DADBD", "#DB5E8C", "#FCD76A", "#A696CE"]
      })
    },
    initOtherCharts: function() {
      function e() {
        function e() {
          return Math.floor(21 * Math.random()) + 20
        }

        function t(e, t, n) {
          $('<div id="tooltip">' + n + "</div>").css({
            position: "absolute",
            display: "none",
            top: t + 5,
            left: e + 15,
            border: "1px solid #333",
            padding: "4px",
            color: "#fff",
            "border-radius": "3px",
            "background-color": "#333",
            opacity: .8
          }).appendTo("body").fadeIn(200)
        }
        var n = [
          [1, e()],
          [2, e()],
          [3, 2 + e()],
          [4, 3 + e()],
          [5, 5 + e()],
          [6, 10 + e()],
          [7, 15 + e()],
          [8, 20 + e()],
          [9, 25 + e()],
          [10, 30 + e()],
          [11, 35 + e()],
          [12, 25 + e()],
          [13, 15 + e()],
          [14, 20 + e()],
          [15, 45 + e()],
          [16, 50 + e()],
          [17, 65 + e()],
          [18, 70 + e()],
          [19, 85 + e()],
          [20, 60 + e()],
          [21, 55 + e()],
          [22, 50 + e()],
          [23, 51 + e()],
          [24, 40 + e()],
          [25, 32 + e()],
          [26, 22 + e()],
          [27, 12 + e()],
          [28, 4 + e()],
          [29, 3 + e()],
          [30, 2 + e()]
        ];
        $.plot($("#chart_grow"), [{
          data: n,
          label: "Unique Visits"
        }], {
          series: {
            lines: {
              show: !0,
              lineWidth: 2,
              fill: !0,
              fillColor: {
                colors: [{
                  opacity: .05
                }, {
                  opacity: .01
                }]
              }
            },
            points: {
              show: !0
            },
            shadowSize: 2,
            grow: {
              active: !0,
              duration: 1500
            }
          },
          grid: {
            hoverable: !0,
            clickable: !0,
            tickColor: "#eee",
            borderWidth: 0
          },
          colors: ["#E25856", "#37b7f3", "#52e136"],
          xaxis: {
            ticks: 11,
            tickDecimals: 0
          },
          yaxis: {
            ticks: 11,
            tickDecimals: 0
          }
        });
        var i = null;
        $("#chart_2").bind("plothover", function(e, n, o) {
          if ($("#x").text(n.x.toFixed(2)), $("#y").text(n.y.toFixed(2)), o) {
            if (i != o.dataIndex) {
              i = o.dataIndex, $("#tooltip").remove();
              var r = o.datapoint[0].toFixed(2),
                s = o.datapoint[1].toFixed(2);
              t(o.pageX, o.pageY, o.series.label + " of " + r + " = " + s)
            }
          } else $("#tooltip").remove(), i = null
        })
      }
      e()
    }
  }
}();