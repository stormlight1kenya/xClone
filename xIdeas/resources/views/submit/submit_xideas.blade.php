<h4> Share yours ideas </h4>
                <div class="row">

                    <form action="{{ route('xideas.create')}}" method="post">

                    @csrf

                    <div class="mb-3">
                        <textarea name="xidea" class="form-control" id="idea" rows="3"></textarea>
                    @error('xidea')
                        <div class="fs-6 alert alert-danger alert-dismissible fade show mt-3">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-dark"> Share </button>
                    </div>

                    </form>
                </div> 