(function ($) {
    'use strict';
    $(document).ready(function () {
        //Prepare jtable plugin
        $('#StudentTableContainer').jtable({
            title: 'Employee List',
            paging: true, //Enable paging
            pageSize: 10, //Set page size (default: 10)
            sorting: true, //Enable sorting
            defaultSorting: 'firstname ASC', //Set default sorting
            selecting: true, //Enable selecting
            multiselect: true, //Allow multiple selecting
            selectingCheckboxes: true,
            //selectOnRowClick: false, //Enable this to only select using checkboxes
            ajaxSettings: {
                type: 'GET',
                dataType: 'json',
            },
            actions: {
                listAction: "{{ url('admin/jtable/index') }}",
                deleteAction: function (postData) {
                    return $.Deferred(function ($dfd) {
                        $.ajax({
                            url: "{{ url('admin/jtable/delete') }}",
                            type: 'POST',
                            dataType: 'json',
                            data: postData,
                            success: function (data) {
                                $dfd.resolve(data);
                            },
                            error: function () {
                                $dfd.reject();
                            },
                        });
                    });
                },
                updateAction: function (postData) {
                    return $.Deferred(function ($dfd) {
                        $.ajax({
                            url: "{{ url('admin/jtable/update') }}",
                            type: 'POST',
                            dataType: 'json',
                            data: postData,
                            success: function (data) {
                                console.log('success');
                                $dfd.resolve(data);
                            },
                            error: function (data) {
                                console.log('error');
                                console.log(data);
                                $dfd.reject();
                            },
                        });
                    });
                },
                createAction: function (postData) {
                    console.log('creating from custom function...');
                    return $.Deferred(function ($dfd) {
                        $.ajax({
                            url: "{{ url('admin/jtable/store') }}",
                            type: 'POST',
                            dataType: 'json',
                            data: postData,
                            success: function (data) {
                                console.log('success');
                                $dfd.resolve(data);
                            },
                            error: function (data) {
                                console.log('error');
                                console.log(data);
                                $dfd.reject();
                            },
                        });
                    });
                },
            },
            fields: {
                id: {
                    key: true,
                    create: false,
                    edit: false,
                    list: false,
                },
                firstname: {
                    title: 'First Name',
                    width: '23%',
                    inputClass: 'validate[required], form-control',
                },
                lastname: {
                    title: 'last Name',
                    width: '23%',
                    inputClass: 'validate[required], form-control',
                },
                age: {
                    title: 'Age',
                    width: '15%',
                    inputClass: 'validate[required], form-control',
                },
                job: {
                    title: 'Job',
                    width: '23%',
                    inputClass: 'validate[required], form-control',
                },
                email: {
                    title: 'Email address',
                    width: '15%',
                    inputClass: 'validate[required,custom[email]], form-control',
                },
            },
        });

        //Load student list from server
        $('#StudentTableContainer').jtable('load');

        //Delete selected students
        $('#DeleteAllButton')
            .button()
            .on('click', function () {
                var $selectedRows = $('#StudentTableContainer').jtable('selectedRows');
                $('#StudentTableContainer').jtable('deleteRows', $selectedRows);
            });
        //Re-load records when user click 'load records' button.
        $('#LoadRecordsButton').on('click', function (e) {
            e.preventDefault();
            $('#StudentTableContainer').jtable('load', {
                firstname: $('#name').val(),
                lastname: $('#lname').val(),
            });
        });

        //Load all records when page is first shown
        $('#LoadRecordsButton').on('click');

        $('.jtable-left-area select').addClass('form-control');
        $('button').addClass('btn btn-secondary');
        $('#AddRecordDialogSaveButton, #EditDialogSaveButton')
            .removeClass('btn-secondary')
            .addClass('btn-primary');
        $('#DeleteDialogButton').removeClass('btn-secondary').addClass('btn-danger');
        $('#DeleteAllButton,#LoadRecordsButton').removeClass('btn-secondary');
    });
})(jQuery);
