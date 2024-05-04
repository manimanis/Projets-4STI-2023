document.addEventListener('DOMContentLoaded', function() {
    const cpuSelect = document.getElementById('cpu');
    const gpuSelect = document.getElementById('gpu');
    const boitierSelect = document.getElementById('boitier');
    const motherSelect = document.getElementById('mother');
    const ramSelect = document.getElementById('ram');
    const stockageSelect = document.getElementById('stockage');
    const totalPriceElement = document.getElementById('totalPrice');
  
    function handleOptionChange() {
      const selectedCpuPrice = parseFloat(cpuSelect.selectedOptions[0].dataset.price) || 0; 
      const selectedGpuPrice = parseFloat(gpuSelect.selectedOptions[0].dataset.price) || 0;
      const selectedMotherPrice = parseFloat(motherSelect.selectedOptions[0].dataset.price) || 0; 
      const selectedBoitierPrice = parseFloat(boitierSelect.selectedOptions[0].dataset.price) || 0; 
      const selectedstockagePrice = parseFloat(stockageSelect.selectedOptions[0].dataset.price) || 0; 
      const selectedRamPrice = parseFloat(ramSelect.selectedOptions[0].dataset.price) || 0; 

      const totalPrice = selectedCpuPrice + selectedGpuPrice + selectedMotherPrice + selectedBoitierPrice + selectedRamPrice + selectedstockagePrice;
      totalPriceElement.textContent = `Total : ${totalPrice.toFixed(2)} DT`;
    }
  
    cpuSelect.addEventListener('change', handleOptionChange);
    gpuSelect.addEventListener('change', handleOptionChange);
    motherSelect.addEventListener('change', handleOptionChange);
    boitierSelect.addEventListener('change', handleOptionChange);
    ramSelect.addEventListener('change', handleOptionChange);
    stockageSelect.addEventListener('change', handleOptionChange);

});
