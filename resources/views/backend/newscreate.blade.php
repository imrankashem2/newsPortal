@extends('layouts.adminlayout')
@section('content')
<main>
    <div class="container-fluid">
    <div class="row" style="margin-top:50px;">
        <a   href="http://ifwl-bd.com/news/add"> <button type="button" class="btn btn-primary">
            <svg class="svg-inline--fa fa-plus-square fa-w-14" aria-hidden="true" focusable="false"
            data-prefix="fas" data-icon="plus-square" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor"
            d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-32 252c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92H92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"></path>
        </svg><!-- <i class=" fa fas fa-plus-square"></i> --> Back</button>
         </a>
    </div>
    <br>
    <div class="card" style="background:white;">
        <div class="card-header">
            Add news
        </div>
        <div class="card-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" placeholder="" name="title" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">News Category</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="category">
                            <option value=""> Select News Category </option>
                                                                <option value="1">Bangladesh</option>
                                                                <option value="2">International</option>
                                                                <option value="3">Sports</option>
                                                                <option value="4">Opinion</option>
                                                                <option value="5">Economy</option>
                                                                <option value="6">Entertainment</option>
                                                                <option value="7">Lifestyle</option>
                                                                <option value="8">Science &amp; Tech</option>
                                                            </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Information</label>
                    <div class="col-sm-10">
                        <textarea id="textareaa" class="form-control" name="information"

                        style="visibility: hidden; display: none;">

                        </textarea>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Image Title</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" placeholder="" name="imgTitle" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" placeholder="" name="img" type="file">
                    </div>
                </div>



                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Publication Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="publicationStatus">
                            <option> Select Publication status</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>




            </div>
        </div>

    </div>

    </div></main>
@endsection
