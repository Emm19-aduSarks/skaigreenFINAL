from flask import Flask, request, jsonify
from werkzeug.utils import secure_filename
from roboflow import Roboflow
import os

app = Flask(__name__)
rf = Roboflow(api_key="J3NQpHOIVfrARAn7q3HC")
project = rf.workspace().project("skaigreen")
model = project.version(1).model

# Create a directory named "uploads" in the current working directory
UPLOAD_FOLDER = os.path.join(os.getcwd(), 'uploads')
if not os.path.exists(UPLOAD_FOLDER):
    os.makedirs(UPLOAD_FOLDER)

@app.route('/predict', methods=['POST'])
def predict():
    # check if image was uploaded
    if 'file' not in request.files:
        return jsonify({'error': 'No file uploaded'}), 400
    
    file = request.files['file']
    
    # check if file is valid image format
    if not file.content_type.startswith('image/'):
        return jsonify({'error': 'Invalid file format'}), 400
    
    # Save the file to a temporary location
    filename = secure_filename(file.filename)
    saved_file_path = os.path.join(UPLOAD_FOLDER, filename)
    file.save(saved_file_path)
    
    # perform prediction with Roboflow model
    response = model.predict(saved_file_path, confidence=40, overlap=30).json()
    
    # return prediction results as JSON
    return jsonify(response), 200




if __name__ == '__main__':
    app.run(debug=True)
