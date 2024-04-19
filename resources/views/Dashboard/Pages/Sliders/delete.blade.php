
    <!-- Modal -->
  <div class="modal fade" id="delete{{ $Slider->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('Sliders.destroy' , "test") }}" method="POST">
            @csrf
            @method("DELETE")
            <div class="modal-body">
                <h6> {{ __("main.SureDelete") }} </h6>
                <input type="hidden" name="id" value="{{ $Slider->id }}">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __("main.Close") }}</button>
              <button type="submit" class="btn btn-danger"> {{ __("main.Delete") }} </button>
            </div>
        </form>
      </div>
    </div>
  </div>
