// ----------------------
// RECTANGLE ELEMENT
// ----------------------
import ShapeElement from "./ShapeElement.js";

class RectElement extends ShapeElement {
    constructor(options = {}) {
        super(options);
        this.fabricClass = fabric.Rect;
        this.defaultProps = {
            width: 150,
            height: 100
        };
    }

    getPreviewPath() {
        return `<rect x="-50" y="-30" width="100" height="60" />`;
    }


}

export default RectElement;
