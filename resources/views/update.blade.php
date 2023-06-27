<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortchat icon" href="{{asset('../images/fav icon.png')}}" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('../css/add.css')}}">

</head>
<body>

<div class="container">

    <form action="{{route('update',$move->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" value="{{$move->moveName}}" name="moveName">
                </div>
                <div class="inputBox">
                    <span>Photo :</span>
                    <input type="file" value="{{$move->pathPhoto}}" name="photos">
                </div>
                <div class="inputBox">
                    <span>BackGround :</span>
                    <input type="file" value="{{$move->pathBackground}}" name="backimage">
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>Category :</span>
                        <select  name="category" id="cars" class="sel" >
                            <option value="Action">Action</option>
                            <option value="Cartoon">Cartoon</option>
                            <option value="Romantic">Romantic</option>
                            <option value="War">War</option>
                        </select>
                    </div>
                    <div class="inputBox">
                        <span>quality :</span>
                        <select name="quality" id="cars" class="sel">
                            <option value="HD">HD</option>
                            <option value="720">720</option>
                            <option value="480">480</option>
                            <option value="360">360</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="inputBox">
                    <span>Summarize</span>
                    <input type="text" value="{{$move->summary}}" name="summary">
                </div>
                <div class="inputBox">
                    <span>Rate :</span>
                    <input type="number" value="{{$move->rating}}" name="rating">
                </div>
                <div class="inputBox">
                    <span>country :</span>
                    <input type="text" value="{{$move->country}}" name="country">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Release Date:</span>
                        <input type="number" value="{{$move->ReleaseDate}}" name="ReleaseDate">
                    </div>
                </div>

            </div>

        </div>

        <input type="submit" value="Update Move" class="submit-btn">

    </form>

</div>

</body>
</html>
