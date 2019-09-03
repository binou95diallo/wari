import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router, ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-depot',
  templateUrl: './depot.component.html',
  styleUrls: ['./depot.component.css']
})
export class DepotComponent implements OnInit {
  montant: string;
  idCompteData:{};
  comptes: number;
  errorMessage: string;
  constructor(private data: DataService, private router: Router,private route:ActivatedRoute) { }

  addDepot() {
    console.log(this.montant);
    const id = +this.route.snapshot.paramMap.get('id');
   this.data.depot(this.montant,id)
    .subscribe(
      res => {
        console.log(res);
        this.router.navigate(['/compte'])
      },
      err => this.errorMessage=err.error.detail
    )   
    
  }
  getPartenaireCompte(){
    this.data.getPartenaireCompte().subscribe(
      data=>{
        this.idCompteData=data
        console.log(data);
      },error => this.errorMessage = error.error.detail
    );
  }


  ngOnInit() {
    this.getPartenaireCompte();
  }

}
