
@extends('master')
@section('content')

@auth
<h2 class="text-dark mt-5">User Name: {{auth()->user()->name}}</h2>
@endauth


<p class="mt-3 text-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, sapiente provident? Fuga reprehenderit totam iste. Velit voluptate quos impedit modi? Quis et repellendus officia accusamus maiores! Dolor, quae. Assumenda commodi quidem ipsum nam deserunt praesentium tempore, modi alias magni at, laudantium culpa sapiente incidunt vitae itaque maxime, consectetur sed totam debitis consequuntur nobis corrupti non omnis! Suscipit porro veritatis minima quos sit accusantium est, labore, dolorem nulla iure iusto reiciendis impedit assumenda aspernatur quis, temporibus dicta voluptate minus? Recusandae aliquam omnis vel sed dolorem odit fuga impedit qui similique perspiciatis. Modi inventore officia, explicabo distinctio ratione velit quod doloribus possimus id iure eligendi expedita, debitis, nisi quis hic corporis ex! Quae excepturi, ut perspiciatis cum dolor laborum ullam ipsam inventore odio, deleniti, eos consequatur saepe nulla iure nemo expedita enim quidem magni officia asperiores aperiam! In, iste earum. Sequi nulla accusantium fugit, cumque libero delectus dolorum quo quaerat quod obcaecati laborum et illo velit omnis consequuntur beatae vel modi voluptatum doloribus. Minus odio rerum iure, itaque amet pariatur vero suscipit cum ipsam ullam voluptatem natus quidem, reprehenderit tempora corporis ipsum dolorem enim. Minus at quod ullam, tempora sit suscipit assumenda ipsam natus numquam eos provident, fugiat animi. Laudantium, esse quaerat.</p>

@endsection