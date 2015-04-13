<table class="table table-striped table-bordered sortable">
    <thead>
        <tr>
            <th data-defaultsort="disabled">&nbsp;</th>
            <th>Name</th>
            <th>Last activity</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>&nbsp;</td>
        <td><a href="{{route('categories.noCategory')}}"><em>Without a category</em></a></td>
        <td>&nbsp;</td>
    </tr>
    @foreach($categories as $category)
    <tr>
        <td>
            <div class="btn-group btn-group-xs">
                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-default btn-xs"><i class="fa fa-fw fa-pencil"></i></a>
                <a href="{{route('categories.delete',$category->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash-o"></i></a>
            </div>
        </td>
        <td>
            <a href="{{route('categories.show',$category->id)}}" title="{{{$category->name}}}">{{{$category->name}}}</a>
        </td>
        @if($category->lastActivity)
            <td data-value="{{$category->lastActivity->format('U')}}">
                {{$category->lastActivity->format('jS F Y')}}
            </td>
        @else
            <td data-value="0">
                <em>Never</em>
            </td>
        @endif
    </tr>
    @endforeach
    </tbody>
</table>