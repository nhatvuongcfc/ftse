// $('[data-toggle="tooltip"]').tooltip();
//NHẤN NÚT LỌC CHUYÊN ĐỀ
function filterTopic() {
    var groupId = $("#selectGroup option:selected").val();
    var subjectId = $("#selectSubject option:selected").val();
}
//NHÂN NÚT SELECT MÔN HỌC
function selectSubject(subjectId) {
    var groupId = $("#selectGroup option:selected").val();
    // var url = window.location.pathname;
    // if (url.includes('edit')) {
    //     var matrixId = $("#matrixId").val();
    //     getTopicEdit(matrixId);
    // }
    resetTable();
    getTopic(subjectId, groupId);
};
// NHẤN NÚT SELECT KHỐI LỚP
function selectGroup(groupId) {
    var subjectId = $("#selectSubject option:selected").val();
    resetTable();
    getTopic(subjectId, groupId);
};
// TĂNG SỐ LƯỢNG CÂU HỎI
function plusTotalQuestion() {
    var number = $('.total-question').val();
    number++;
    // $(e).val(number);
    $('.total-question').val(parseInt(number));
}
// GIẢM SỐ LƯỢNG CÂU HỎI
function minusTotalQuestion() {
    var number = $('.total-question').val();
    if (number == 0) {
        return false;
    }
    number--;
    $('.total-question').val(parseInt(number));
}
// THAY ĐỔI SỐ LƯỢNG CÂU HỎI
$(".total-question").bind('change keyup', function() {
    if ($(this).val().length == 0) {
        $(this).val('');
    }
    $(this).attr('value', $(this).val());
});
// IN CHUYÊN ĐỀ ĐÃ CHỌN
function getTopic(subjectId, groupId) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: './getTopic',
        data: {
            groupId: groupId,
            subjectId: subjectId
        },
        success: function(result) {
            var topics = result.topics;
            var content = "";
            for (var topic of topics) {
                content += '<div   class=" custom-control custom-checkbox">' +
                    '<input type="checkbox" onclick="chooseTopic(this)"    name="topic[]" value="' + topic.id + '" class="topic-checkbox  custom-control-input" id="topic' + topic.id + '">' +
                    '<label class="custom-control-label" for="topic' + topic.id + '">' + topic.name + '</label>' +
                    '</div>';
            }
            $(".topic").html(content);
        },
    });
    // resetTable();
}

function getTopic(subjectId, groupId) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: './getTopic',
        data: {
            groupId: groupId,
            subjectId: subjectId
        },
        success: function(result) {
            var topics = result.topics;
            var content = "";
            for (var topic of topics) {
                content += '<div   class=" custom-control custom-checkbox">' +
                    '<input type="checkbox" onclick="chooseTopic(this)"    name="topic[]" value="' + topic.id + '" class="topic-checkbox  custom-control-input" id="topic' + topic.id + '">' +
                    '<label class="custom-control-label" for="topic' + topic.id + '">' + topic.name + '</label>' +
                    '</div>';
            }
            $(".topic").html(content);
        },
    });
    // resetTable();
}
// CHỌN CHUYÊN ĐỀ
var arrTopicMatrix = []; // MẢNG CHỦ ĐỀ TRONG MA TRẬN
var arrContentMatrix = []; // MẢNG NỘI DUNG TRONG MA TRẬN


function chooseTopic(e) {
    // var indexTbody = parseInt($("#indexTbody").val());
    var id = $(e).val();
    var check = $(e).is(':checked');
    if (check == true) {
        var arrValueRow = [0, 0, 0, 0];
        arrValueTable.push(arrValueRow);
        arrTopicMatrix.push(id);
        getMatrix(arrTopicMatrix);
    } else {
        var row = $(e).attr('data-row');
        arrValueTable.splice(row, 1);
        arrTopicMatrix = arrTopicMatrix.filter(item => item !== id);
        getMatrix(arrTopicMatrix);
    }
};
// IN BẢNG MA TRẬN
var arrValueTable = [];

function getMatrix(array) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        dataType: 'json',
        type: 'POST',
        url: 'getMatrix',
        data: {
            array: array
        },
        success: function(result) {
            var topics = result.topics;
            var content = "";
            key = 1;
            var arrDifficult = ['NB', 'TH', 'VD', 'VC'];
            var arrNB = [];
            var arrTH = [];
            var arrVD = [];
            var arrVC = [];
            var arrNumberTopic = [];
            var row = 0;
            var index = 1;
            for (var topic of topics) {
                content += '<tr>' +
                    '<td>' + index + '</td>' +
                    '<td>' +
                    '<div class="tag">' +
                    '<input type="checkbox" class="topic-matrix" value=' + topic.id + ' />' +
                    '<label for="">' + topic.name + '</label>' +
                    // '<i class="fa fa-times-circle"></i>' +
                    '</div>' +
                    '</td>';
                var collumn = 0;
                for (var difficult of arrDifficult) {
                    var space = '&nbsp';
                    var e = difficult + row;
                    content += '<td>' +
                        '<div class=" def-number-input number-input safari_only">' +
                        '<button onclick="minusQuestionMatrix(' + difficult + row + ')"  class="minus"></button>' +
                        '<input data-row=' + row + ' data-collumn=' + collumn + ' class=" ' + row + collumn + ' number-matrix number-' + difficult + '" ' +
                        'id="' + difficult + row + '" onfocus="focusInput(this)" data-topic=' + topic.id + ' ' +
                        ' min="0" name="' + difficult + row + '" value="' + arrValueTable[row][collumn] + '" type="number">' +
                        '<button onclick="plusQuestionMatrix(' + difficult + row + ')"  class="plus"></button>' +
                        '</div>' +
                        '</td>';
                    collumn++;
                }
                content += '<td id="numberTopic' + row + '"></td>' +
                    '<td id="persentTopic' + row + '"></td>' +
                    '</tr>';
                row++;
                index++;
            }
            content +=
                '<tr>' +
                ' <th colspan="2" style="text-align: center">Tổng số câu</th>';
            for (var difficult of arrDifficult) {
                content += '<th id="sum' + difficult + '" style="text-align: center"></th>';
            }
            content += '<th id="numberQuestionMatrix"></th>' +
                '<th></th>' +
                '</tr>' +
                '<tr>' +
                ' <th colspan="2" style="text-align: center">% câu</th>';

            for (var difficult of arrDifficult) {
                content += '<th id="persent' + difficult + '" style="text-align: center"></th>';
            }
            content += '<th></th>' +
                '<th id="persentQuestion"></th>' +
                '</tr>';
            $(".tbodyMatrix").html(content);
            row = index - 1;
            $("#numberRowMatrix").val(row);
            calculateMatrix();
        }
    });
}

function resetTable() {
    $(".tbodyMatrix").html("");
    $('input[type=checkbox]').prop("checked", false);
    arrTopicMatrix.length = 0;
    arrValueTable.length = 0;
    $("#numberRowMatrix").val(0);
};

function focusInput(e) {
    // console.log(e);
    $(e).attr('value', '');
}
// GIẢM SỐ LƯỢNG CÂU HỎI TRONG BẢNG MA TRẬN
function minusQuestionMatrix(e) {
    var row = $(e).attr('data-row');
    var collumn = $(e).attr('data-collumn');
    var number = $(e).val();
    if (number == 0) {
        return false;
    }
    number--;
    $(e).attr('value', number);
    updateArrValueTable(number, row, collumn);
}
//TĂNG SỐ LƯỢNG CÂU HỎI TRONG BẢNG MA TRẬN
function plusQuestionMatrix(e) {
    var row = $(e).attr('data-row');
    var collumn = $(e).attr('data-collumn');
    var totalQuestion = $(".total-question").val();
    var numberQuestionMatrix = $("#numberQuestionMatrix").text();
    // if (totalQuestion == 0) {
    //     Swal.fire({
    //         text: 'Vui lòng nhập số lượng câu hỏi',
    //         icon: 'error',
    //         timer: 2000,
    //         showConfirmButton: false
    //     });
    //     return false;
    // }
    if (totalQuestion == numberQuestionMatrix) {
        return false;
    }
    var number = $(e).val();
    number++;
    $(e).attr('value', number);

    // calculateMatrix();
    updateArrValueTable(number, row, collumn);
}
// THAY ĐỔI SỐ LƯỢNG CÂU HỎI TRONG BẢNG MA TRẬN
function changeQuestionMatrix(e) {
    var number = $(e).val();
    console.log(number.length);
    if (number.length == 0) {
        $(e).val('');
    }
    var totalQuestion = $(".total-question").val();
    var numberQuestionMatrix = $("#numberQuestionMatrix").text();
    if (totalQuestion == numberQuestionMatrix) {
        return false;
    }
    $(e).attr('value', number);
    calculateMatrix(e);
}

function updateArrValueTable(number, row, collumn) {
    for (var i = 0; i < arrValueTable.length; i++) {
        for (var j = 0; j < 4; j++) {
            if (i == row && j == collumn) {
                arrValueTable[i][j] = number;
            }
        }
    }

    calculateMatrix();
}

// TÍNH TOÁN TRONG BẢNG MA TRẬN
function calculateMatrix(e) {
    var totalQuestion = $(".total-question").val();

    var arrDifficult = ['NB', 'TH', 'VD', 'VC'];
    var numberQuestionMatrix = 0;
    for (var i = 0; i < arrValueTable.length; i++) {
        var sumNumberTopic = 0;
        for (var j = 0; j < arrDifficult.length; j++) {
            var string = arrDifficult[j] + i;
            // console.log(string);
            var numberTopic = parseInt($('input[name="' + string + '"]').val());
            // console.log(numberTopic);
            sumNumberTopic += numberTopic;
            numberQuestionMatrix += numberTopic;
        }

        // console.log(numberQuestionMatrix);
        $('#numberTopic' + i).html(sumNumberTopic);
        $('#numberQuestionMatrix').html(numberQuestionMatrix);
    }
    for (var difficult of arrDifficult) {
        var numberDifficult = 0;
        $(".number-" + difficult).each(function() {
            numberDifficult += parseInt($(this).val());
        });
        $('#sum' + difficult).html(numberDifficult);
    }
    // persentQuestion(numberQuestionMatrix);
    // PHẦN TRẮM
    for (var i = 0; i < arrValueTable.length; i++) {
        if (numberQuestionMatrix == 0) {
            $('#persentTopic' + i).text("0%");
            $("#persentQuestion").text("0%");
        } else {
            var persentTopic = Math.round($('#numberTopic' + i).text() / numberQuestionMatrix * 100);
            $('#persentTopic' + i).text(persentTopic + "%");
            $("#persentQuestion").text("100%");

        }
    }
    for (var difficult of arrDifficult) {
        if (numberQuestionMatrix == 0) {
            $('#persent' + difficult).text("0%");
            // $("#persentQuestion").text("100%");
        } else {
            var persentdifficult = Math.round($("#sum" + difficult).text() / numberQuestionMatrix * 100);
            $('#persent' + difficult).text(persentdifficult + "%");
        }
    }
}


function postCreateMatrix() {
    if (!$('#nameMatrix').val()) {
        Swal.fire({
            text: 'Tên ma trận không được trống',
            icon: 'error',
            timer: 2000,
            showConfirmButton: false
        });
        return false;
    }
    var totalQuestion = $(".total-question").val();
    console.log(totalQuestion);
    var numberQuestionMatrix = $("#numberQuestionMatrix").text();
    if (totalQuestion == 0) {
        Swal.fire({
            text: 'Vui lòng nhập số lượng câu hỏi',
            icon: 'error',
            timer: 2000,
            showConfirmButton: false
        });
        return false;
    }
    if (totalQuestion < 10) {
        Swal.fire({
            text: 'Số lượng câu hỏi tối thiểu 10 câu',
            icon: 'error',
            timer: 2000,
            showConfirmButton: false
        });
        return false;
    }

    if (totalQuestion != numberQuestionMatrix) {
        Swal.fire({
            title: 'Nhập lại ma trận',
            text: 'Số lượng câu hỏi trong ma trận không đúng',
            icon: 'error',
            timer: 3000,
            showConfirmButton: false
        });
        return false;
    }
    var groupId = $("#selectGroup option:selected").val();
    var subjectId = $("#selectSubject option:selected").val();
    var name = $('#nameMatrix').val();
    var matrixId = $('#matrixId').val();
    var arrTopic = [];
    var arrNB = [];
    var arrTH = [];
    var arrVD = [];
    var arrVC = [];
    $(".topic-matrix").each(function() {
        var topic_id = $(this).val();
        arrTopic.push(topic_id);
    });
    var arrDifficult = ['NB', 'TH', 'VD', 'VC'];
    $(".number-NB").each(function() {
        var number = $(this).val();
        arrNB.push(number);
    });
    $(".number-TH").each(function() {
        var number = $(this).val();
        arrTH.push(number);
    });
    $(".number-VD").each(function() {
        var number = $(this).val();
        arrVD.push(number);
    });
    $(".number-VC").each(function() {
        var number = $(this).val();
        arrVC.push(number);
    });
    var url = window.location.href.indexOf('edit');
    // console.log(url.indexOf('edit'));
    if (url == -1) {
        type = "POST";

    } else {
        type = "PUT";
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        dataType: 'json',
        type: type,
        url: "./",
        data: {
            matrixId: matrixId,
            name: name,
            numberQuestion: totalQuestion,
            groupId: groupId,
            subjectId: subjectId,
            arrTopic: arrTopic,
            arrNB: arrNB,
            arrTH: arrTH,
            arrVD: arrVD,
            arrVC: arrVC,
        },
        success: function(result) {
            console.log(result);
            Swal.fire({
                text: 'Thêm ma trận thành công',
                icon: 'success',
                timer: 2000,
                showConfirmButton: false
            });
            setTimeout(function() {
                window.location.href = "/admin/matrix";
            }, 1000);
        }
    });

}

getUrl();

function getUrl() {
    var url = window.location.pathname;
    // console.log(url.includes('edit'));
    if (url.includes('edit')) {
        var matrixId = $("#matrixId").val();
        getTopicEdit(matrixId);
    }
}


function getTopicEdit(matrixId) {
    var groupId = $("#selectGroup option:selected").val();
    var subjectId = $("#selectSubject option:selected").val();
    console.log()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '../edit/getTopic',
        data: {
            matrixId: matrixId,
            groupId: groupId,
            subjectId: subjectId
        },
        success: function(result) {
            var topics = result.topics;
            var details = result.details;
            console.log(topics);
            console.log(details);
            var content = "";
            // var arrTopic = [];
            $("#numberRowMatrix").val(details.length);
            for (var detail of details) {
                for (var topic of topics) {
                    // arrTopic.push(topic);
                    if (detail.topic_id == topic.id) {
                        content += '<div   class=" custom-control custom-checkbox">' +
                            '<input checked type="checkbox"  onclick="topicMatrix(' + topic.id + ')"    name="topic[]" value="' + topic.id + '" class="topic-checkbox  custom-control-input" id="topic' + topic.id + '">' +
                            '<label class="custom-control-label" for="topic' + topic.id + '">' + topic.name + '</label>' +
                            '</div>';
                        topics.splice(topics.indexOf(topic), 1);

                    }
                }
            }
            for (var topic of topics) {
                content += '<div   class=" custom-control custom-checkbox">' +
                    '<input type="checkbox" onclick="topicMatrix(' + topic.id + ')"    name="topic[]" value="' + topic.id + '" class="topic-checkbox  custom-control-input" id="topic' + topic.id + '">' +
                    '<label class="custom-control-label" for="topic' + topic.id + '">' + topic.name + '</label>' +
                    '</div>';
            }
            $(".topic").html(content);
        },
    });
    resetTable();
}

var checkbox = $('table tbody input[type="checkbox"]');
$("#selectAll").click(function() {
    if (this.checked) {
        checkbox.each(function() {
            this.checked = true;
        });
    } else {
        checkbox.each(function() {
            this.checked = false;
        });
    }
});
checkbox.click(function() {
    if (!this.checked) {
        $("#selectAll").prop("checked", false);
    }
});

function delete_one(id) {
    Swal.fire({
        title: 'Bạn có chắc chắn?',
        text: "Bạn không thể khôi phục dữ liệu này ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xóa!',
        cancelButtonText: 'Hủy!'
    }).then((result) => {
        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'delete',
                url: './matrix/' + id,
                dataType: "JSON",

                success: function(result) {
                    Swal.fire({
                        text: 'Xóa thành công',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    setTimeout(function() { // wait for 5 secs(2)
                        location.reload(); // then reload the page.(3)
                    }, 500);
                }
            });
        }
    });
}

function delete_mul() {
    var selectAll = $('#selectAll').is(':checked');
    // console.log(selectAll);
    if (selectAll) {
        delete_all();
    } else {
        delete_some();
    }
}

function delete_all() {
    Swal.fire({
        title: 'Bạn có chắc chắn xóa tất cả?',
        text: "Bạn kỵ hông thể khôi phục dữ liệu này ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xóa!',
        cancelButtonText: 'Hủy!'
    }).then((result) => {
        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: './matrix/destroy_all',
                dataType: "JSON",
                success: function(result) {
                    Swal.fire({
                        text: 'Xóa thành công',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    setTimeout(function() { // wait for 5 secs(2)
                        location.reload(); // then reload the page.(3)
                    }, 500);
                    checkbox.each(function() {
                        this.checked = false;
                    });
                    // $(".checkbox_some").checked=false; // Unchecks it
                }
            });
        }
    });

}

function delete_some() {
    var arr_delete = [];
    var checkbox = $(".checkbox_some");
    var checked = checkbox.filter(':checked');
    checked.map(function() {
        arr_delete.push(this.id);
    });
    // arr_delete=json_encode(arr_delete);
    // console.log(arr_delete);
    Swal.fire({
        title: 'Bạn có chắc chắn?',
        text: "Bạn không thể khôi phục dữ liệu này ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xóa!',
        cancelButtonText: 'Hủy!'
    }).then((result) => {
        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: './matrix/destroy_some',
                dataType: "JSON",
                data: {
                    "array": arr_delete
                },
                success: function(result) {
                    Swal.fire({
                        text: 'Xóa thành công',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    setTimeout(function() {
                        location.reload();
                    }, 500);
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
        }
    });
}

function test() {
    $("#exampleModal").css();
}