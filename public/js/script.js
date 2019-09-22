$(function () {

    x= 0;
    let taskId = 0;
    function getTaskTemplate(data) {
        console.log('aa', data.title);
        return '<div class="todo-item  col media py-3" data-id="' + data.id + '">\n' +
            '                            <div class="mr-3">\n' +
            '                                <button class="todo-delete btn btn-sm btn-danger">\n' +
            '                                    <svg class="svg-inline--fa fa-times fa-w-12" aria-hidden="true" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M323.1 441l53.9-53.9c9.4-9.4 9.4-24.5 0-33.9L279.8 256l97.2-97.2c9.4-9.4 9.4-24.5 0-33.9L323.1 71c-9.4-9.4-24.5-9.4-33.9 0L192 168.2 94.8 71c-9.4-9.4-24.5-9.4-33.9 0L7 124.9c-9.4 9.4-9.4 24.5 0 33.9l97.2 97.2L7 353.2c-9.4 9.4-9.4 24.5 0 33.9L60.9 441c9.4 9.4 24.5 9.4 33.9 0l97.2-97.2 97.2 97.2c9.3 9.3 24.5 9.3 33.9 0z"></path></svg><!-- <i class="fas fa-times"></i> --></button>\n' +
            '                            ' +
            '<button class="todo-update btn-sm btn-info" id="todo-update" > update</button>' +
            '</div>\n' +
            '\n' +
            '                            <div class="todo-info media-body">\n' +
            '\n' +
            '                                <div class="todo-head d-flex">\n' +
            '\n' +
            '        <span class="todo-name" contenteditable="true" data-content="todoTitle" data-field="todoTitle">' + data.title + '</span>\n' +
            '\n' +
            '                                    <span class="todo-date ml-auto" data-format="formatDate" data-content="todoDate">' + data.created_at + '</span>\n' +
            '\n' +
            '                                </div>\n' +
            '\n' +
            '                                <div class="owner-name">\n' +
            '                                    <span class="label-item  font-weight-bold">Owner:</span>\n' +
            '\n' +
            '                                    <span contenteditable="true" data-field="ownerName" data-content="todoOwner" class="todo-owner">' + data.owner + '</span>\n' +
            '\n' +
            '                                </div>\n' +
            '\n' +
            '                                <div class="todo-notes" contenteditable="true" data-content="todoNote" data-field="todoDescription">' + data.description + '</div>\n' +
            '\n' +
            '                            </div>\n' +
            '                        </div>'
    }
    $.ajax({
        url:'/tasks',
        type:'get',
        success:function(data){
            for(let i=0;i<data.length;i++){
            $('.todo-list').append(getTaskTemplate(data[i]));
            }
        }
    })
    $('#todoForm').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url:'/tasks',
            type:'post',
            data:{
                'title':$('#todoTitle').val(),
                'owner':$('#todoOwner').val(),
                'description':$('#todoDescription').val()
            },
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

            success:function(data){
                $('.todo-list').append(getTaskTemplate(data));
                console.log('taskssss',data);
            }
            
        })
    })
    $(document).on('click','.todo-delete',function(e){
        e.preventDefault();
        let self=this;
        let id=$(this).parent().parent().data('id');
        $.ajax({
            url:'/tasks/'+id,
            type:'delete',
            
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

            success:function(data){
                $(self).parent().parent().remove();
                console.log('taskssss',data);
            }
            
        })
    })
    $(document).on('click','.todo-update',function(){
        console.log(this)
        x= this;
        let title=$(this).parent().parent().find('.todo-name').text();
        let owner=$(this).parent().parent().find('.todo-owner').text();
        let des=$(this).parent().parent().find('.todo-notes').text();
        console.log(title);
        taskId=$(this).parent().parent().data('id');
        $('#update_task_modal').find('.todoTitle').val(title);
        $('#update_task_modal').find('.todoOwner').val(owner);
        $('#update_task_modal').find('.description').val(des);
        $('#update_task_modal').modal('show');
    })
    $('.todo-addheading').on('click', function () {
        $('.card-body').toggle(300);
    });

    $('#todoFormUpdate').on('submit',function(e){
        console.log('HELLO')
        e.preventDefault();
        let title=$('#update_task_modal').find('.todoTitle').val();
        let owner=$('#update_task_modal').find('.todoOwner').val();
        let des=$('#update_task_modal').find('.description').val();
        $.ajax({
            url:'/tasks/'+taskId,
            type:'put',
            data:{
                'title':title,
                'owner':owner,
                'description':des
            },
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

            success:function(data){
                console.log('taskssss',data);
            }
            
        })
    })
}); // document ready

