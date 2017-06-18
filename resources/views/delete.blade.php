
<a href="javascript:;" class=" delete-btn{{$id}}">Xóa</a>

<div class="modal fade delete_modal{{$id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Warning!</h4>
            </div>
            <div class="modal-body">
                <p>Bạn có muốn xóa bệnh án này?</p>
            </div>
            <div class="modal-footer">
                <form action="hospital/medicalRecord/xoa/{{$id}}"  method="head" id="delete_form{{$id}}" class="hidden">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                <input type="submit" form="delete_form{{$id}}" id="submit{{$id}}" class="btn btn-danger" value="Xóa">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
$(document).on('click','.delete-btn{{$id}}',function(event){
    event.preventDefault();
    $('.delete_modal{{$id}}').modal();
    });

</script>