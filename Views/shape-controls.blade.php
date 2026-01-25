<!-- SHAPE PAGE -->
@push('styles')
    @vite([
        'resources/css/designer/shapeToolbar.css'
    ])
@endpush
<div id="shapeControls" class="controls-panel hidden">

    <label>
        Fill:
        <input type="color" id="shapeFill">
    </label>

    <label>
        Stroke:
        <input type="color" id="shapeStroke">
    </label>

    <label>
        Stroke Width:
        <input type="number" id="shapeStrokeWidth" min="1" max="20" value="2">
    </label>

    <label>
        Width:
        <input type="number" id="shapeWidth">
    </label>

    <label>
        Height:
        <input type="number" id="shapeHeight">
    </label>
    <label>
        Opacity:
        <input type="range" id="opacityInput-Shape" min="0" max="1" step="0.01">
    </label>


    <div class="shape-menu">
        <button id="shape-layer-toggle" class="toolbar-btn">Order</button>  
        <button class = "toolbar-btn" id="animationToggle">Animate</button>

        <div id="shape-layer-dropdown" class="dropdown-menu hidden">
            <button id="shape-front-btn">Bring to Front</button>
            <button id="shape-back-btn">Send to Back</button>
            <button id="shape-forward-btn">Bring Forward</button>
            <button id="shape-backward-btn">Send Backward</button>
        </div>
    </div>
    <div id="starControls" class="hidden star-controls">
        <label>
            Points:
            <input type="number" id="starPoints" min="3" max="24" value="8">
        </label>
    </div>
    <div id="flowerControls" class="hidden">
        <label>
            Petals:
            <input type="number" id="flowerPetals" min="3" max="20" value="6">
        </label>
    </div>



</div>
