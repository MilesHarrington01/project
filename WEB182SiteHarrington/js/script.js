{

    const highlightRowBtn = document.getElementById('highlightRowBtn');

    highlightRowBtn.addEventListener('click', () => {
        const inputID = document.getElementById('petDataHighlight').value
        const rows = document.querySelectorAll('.styled-table tbody tr');

            

            rows.forEach(row => {
                row.style.color = 'black';
            });
       
            rows.forEach(row => {
                const customerID = row.getAttribute('data-customer-id');

                if(inputID === customerID){

                    row.style.color = 'red';
                    
                }
                else {
                    row.style.color = 'black';
                }
            
        });

    
        
    
    });

}