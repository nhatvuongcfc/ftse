getTopic();

function getTopic() {
    var matrixId = $("#matrixId").val();

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

function changeTopic(subjectId, groupId) {
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