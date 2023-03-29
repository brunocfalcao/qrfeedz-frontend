<!DOCTYPE html>
<html>
  <head>
    <title>Voice Recorder</title>
  </head>
  <body>
    <button id="record-button">Record</button>
    <button id="stop-button" disabled>Stop</button>
    <button id="play-button" disabled>Play</button>
    <button id="reset-button" disabled>Reset</button>
    <script>
      const recordButton = document.getElementById('record-button');
      const stopButton = document.getElementById('stop-button');
      const playButton = document.getElementById('play-button');
      const resetButton = document.getElementById('reset-button');
      let recorder;
      let audioBlob;

      navigator.mediaDevices.getUserMedia({ audio: true })
        .then(stream => {
          recorder = new MediaRecorder(stream);

          recorder.addEventListener('dataavailable', event => {
            audioBlob = event.data;
          });
        })
        .catch(error => {
          console.error('Error accessing microphone', error);
        });

      recordButton.addEventListener('click', () => {
        recorder.start();
        recordButton.disabled = true;
        stopButton.disabled = false;
        playButton.disabled = true;
        resetButton.disabled = true;
      });

      stopButton.addEventListener('click', () => {
        recorder.stop();
        recordButton.disabled = false;
        stopButton.disabled = true;
        playButton.disabled = false;
        resetButton.disabled = false;
      });

      playButton.addEventListener('click', () => {
        const audio = new Audio(URL.createObjectURL(audioBlob));
        audio.play();
      });

      resetButton.addEventListener('click', () => {
        audioBlob = null;
        recordButton.disabled = false;
        stopButton.disabled = true;
        playButton.disabled = true;
        resetButton.disabled = true;
      });
    </script>
  </body>
</html>
