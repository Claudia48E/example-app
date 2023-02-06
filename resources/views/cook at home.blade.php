@extends('layouts.layout')

@section('title', 'Cook at home')

@section('content')

<div class="row">
    <div class="column1">
  <h1>Dough recipes</h1>
  <img src="{{url('img/dough-943245__340.jpg')}}" alt="image" height="300" width="350"></img>
  
    <h3>Ingredients</h3>
    <ol>
   <li>320ml warm water</li>
    <li>7g instant yeast</li>
    <li>1 tablespoon sugar</li>
    <li>30ml olive oil</li>
    <li>1 teaspoon salt</li>
    <li>450g flour</li>
    </ol>
  
<h5>Instructions</h5>
    <p>
      Use a large mixing bowl.<br>
     Put the warm water, yeast, and  sugar together in the bowl. <br>
     Mix and leave it for 5 minutes.<br>
    Add the olive oil, salt, and flour.<br>
    Knead the dough for 3-4 minutes. <br>Cover the bowl with a clean kitchen towel.<br>
    Leave it for 60 minutes.
    </p>
  </div>
    
    <div class="column1">
  <h1>Recipes pizza sauce</h1>
  <img src="{{url('img/the-best-slow-cooked-italian-american-tomato-sauce-red-sauce-recipe-step-09-05ad7578f9d34a5092086ae959bea8a7.webp')}}" alt="image" height="300" width="350"></img>
  <h3>Ingredients</h3>
 
  <ol  type="a">
    <li>1 can whole peeled tomatoes</li>
    <li>1 tablespoon  butter</li>
    <li>2 medium cloves garlic</li>
    <li>1 teaspoon dried oregano</li>
    <li>salt</li>
    <li>1 medium yellow onion</li>
    <li>fresh basil </li>
    <li>1 teaspoon sugar</li>
  </ol>
  
  <h5>Instructions</h5>
  <p>
    Process tomatoes and their juice through food mill,<br> pulse in food processor until puréed, <br>or purée with immersion blender.<br>
    Combine oil and butter in medium saucepan and heat <br>over medium-low heat until butter is melted. <br>Add garlic, oregano, pepper flakes,<br> and large pinch salt and cook, stirring frequently,<br> until fragrant but not browned, about 3 minutes.<br> Add tomatoes, onion halves, basil sprigs, and sugar.<br> Bring to a simmer, reduce heat to lowest setting <br> and cook, stirring occasionally, until reduced by half, about 1 hour. <br>Discard onions and basil stems. Season to taste with salt. <br>Allow to cool and store in covered container in the refrigerator for up to 2 weeks.
  </p>
  
  </div>
  </div>
  @endsection