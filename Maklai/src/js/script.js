$(document).ready(function() {
    $(".my-progress-bar").circularProgress({
        line_width: 3,
        color: "#3587e0",
        height: "65px",
        width: "65px",
        starting_position: 0, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
        percent: 0, // percent starts from
        percentage: true,
        text: ""
    }).circularProgress('animate', 78, 2000);
});
