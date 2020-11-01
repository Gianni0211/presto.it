@props([
 'title',
 'body',
 'categoryName',
 'categoryId',
 'createdAt',
 'userName' 
 
])





<div class="col-12">
 <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $title }}
                </div>
                <div class="card-body">
                    <p>
                        <img src="https://via.placeholder.com/300x153.png" class="rounded float-right" alt="">
                        {{ $body }}
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <strong>Category: <a href="{{ route('category.announcements',[
                        $categoryName,
                        $categoryId]) }}">
                        {{  $categoryName }}</a></strong>
                    <i>{{ $createdAt}} - {{ $userName }}</i>
                </div>
            </div>
        </div>

</div>

