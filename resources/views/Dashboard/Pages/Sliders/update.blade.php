  <!-- Modal -->
  <div class="modal fade" id="edit{{ $Slider->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{__("main.ُEdit")}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route("Sliders.update" , "test")}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method("PATCH")
             <div class="modal-body">
                <div class="row">
                  <div class="col-6">
                    <label for=""> {{__("main.Add_Arabic_title_slider")}} </label>
                    <input type="text" value="{{old('title_slider_arabic')}}  {{ $Slider->getTranslation('title' , 'ar') }}" @error('title_slider_arabic') is-invalid @enderror name="title_slider_arabic" class="form-control mb-3">
                    <p class="text-danger">
                      @error("title_slider_arabic")
                        {{$message}}
                      @enderror
                    </p>
                  </div>

                  <div class="col-6">
                    <label for=""> {{__("main.Add_English_title_slider")}} </label>
                    <input type="text" value="{{old('title_slider_english')}}  {{ $Slider->getTranslation('title' , 'en') }} " @error('title_slider_english') @enderror name="title_slider_english" class="form-control mb-3 is-ivalid">
                    <p class="text-danger">
                      @error("title_slider_english")
                        {{$message}}
                      @enderror
                    </p>
                  </div>
                </div>

                <label for=""> {{__("main.Add_Arabic_desc_slider")}} </label>
                <textarea @error("desc_slider_arabic") @enderror name="desc_slider_arabic" class="form-control mb-2" id="" cols="30" rows="10" style="max-height: 100px"> {{old("desc_slider_arabic")}} {{ $Slider->getTranslation("desc" , "ar") }} </textarea>
                <p class="text-danger">
                  @error("desc_slider_arabic")
                    {{$message}}
                  @enderror
                </p>


                <label for=""> {{__("main.Add_English_desc_slider")}} </label>
                <textarea @error("desc_slider_english") @enderror name="desc_slider_english" class="form-control mb-2" id="" cols="30" rows="10" style="max-height: 100px"> {{old("desc_slider_english")}}  {{ $Slider->getTranslation("desc" , "en") }} </textarea>
                <p class="text-danger">
                  @error("desc_slider_english")
                    {{$message}}
                  @enderror
                </p>

                <select name="status" class="form-control mb-2">
                    @if($Slider->status == 1)
                      <option value="1" checked> {{ __("main.Active") }} </option>
                      <option value="0"> {{ __("main.DesActive") }} </option>
                    @else
                    <option value="0" checked> {{ __("main.DesActive") }} </option>
                    <option value="1"> {{ __("main.Active") }} </option>
                    @endif
               </select>

                <input type="file" @error("filename") @enderror name="filename" class="form-control">
                <p class="text-danger">
                  @error("filename")
                    {{$message}}
                  @enderror
                </p>

                <input type="hidden" name="id" value="{{ $Slider->id }}">

              </div>
              <div class="modal-footer float-left">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__("main.Close")}}</button>
                <button type="submit" class="btn btn-primary">{{__("main.Submit")}}</button>
              </div>
        </form>
      </div>
    </div>
  </div>
