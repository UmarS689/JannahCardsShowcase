// ----------------------
// CIRCLE ELEMENT
// ----------------------
import ShapeElement from "./ShapeElement.js";

class CircleElement extends ShapeElement {
    constructor(options = {}) {
        super(options);
        this.fabricClass = fabric.Circle;
        this.defaultProps = {
            radius: 60
        };
    }

    getPreviewPath() {
        return `<circle cx="0" cy="0" r="50" />`;
    }


}

export default CircleElement;
