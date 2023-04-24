from flask import Flask, request, jsonify
from roboflow import Roboflow

app = Flask(__name__)
rf = Roboflow(api_key="J3NQpHOIVfrARAn7q3HC")
project = rf.workspace().project("skaigreen")
model = project.version(1).model

@app.route('/predict', methods=['POST'])
def predict():
    # check if image was uploaded
    if 'file' not in request.files:
        return jsonify({'error': 'No file uploaded'}), 400
    
    file = request.files['file']
    
    # check if file is valid image format
    if not file.content_type.startswith('image/'):
        return jsonify({'error': 'Invalid file format'}), 400
    
    # perform prediction with Roboflow model
    response = model.predict(file, confidence=40, overlap=30).json()
    
    # return prediction results as JSON
    return jsonify(response), 200

if __name__ == '__main__':
    app.run(debug=True)
