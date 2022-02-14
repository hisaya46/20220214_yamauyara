$("#postNumber").blur(function () {
    changeZen($(this));
});

changeZen = function (ele) {
    var val = ele.val();
    var han = val.replace(
        /[Ａ-Ｚａ-ｚ０-９－！”＃＄％＆’（）＝＜＞，．？＿［］｛｝＠＾～￥]/g,
        function (s) {
            return String.fromCharCode(s.charCodeAt(0) - 65248);
        }
    );
    $(ele).val(han);
};

document.querySelector('input[type="date"]').addEventListener(
    "change",
    (event) => {
        const target = event.target;
        target.setAttribute("data-date", target.value);
    },
    false
);