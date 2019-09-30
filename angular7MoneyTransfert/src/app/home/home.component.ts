import { Component, OnInit } from '@angular/core';
import { AuthService } from '../auth.service';
import * as jsPDF from 'jspdf'

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  constructor(private authenticationService:AuthService){}
  isAdmin(){
    return this.authenticationService.isAdmin();
  }
  
  isUserPart(){
    return this.authenticationService.isUserPart();
  }

  isCaissier(){
    return this.authenticationService.isCaissier();
  }

  isPartenaire(){
    return this.authenticationService.isAdminPartenaire();
  }
  isPartenaireOrUser(){
    return this.authenticationService.isPartenaireOrUser();
  }
  isAdminPartenaireOrCaissier(){
    return this.authenticationService.isAdminPartenaireOrCaissier();
  }

  isAdminPartenaire(){
    return this.authenticationService.isAdminPartenaire();
  }
  
  isAuthenticated(){
    return this.authenticationService.isAuthenticated();
  }

  ngOnInit() {

  }

  genPDF() {
	
    var doc = new jsPDF();
    
      var specialElementHandlers = {
          '#hidediv' : function(element,render) {return true;}
      };
      
      doc.fromHTML($('#testdiv').get(0), 20,20,{
                   'width':500,
              'elementHandlers': specialElementHandlers
      });
    
    doc.save('Test.pdf');
    
  }

}
