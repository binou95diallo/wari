import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router, ActivatedRoute } from '@angular/router';
import { ToastrService } from 'ngx-toastr';
import Swal from 'sweetalert2';

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
  constructor(private data: DataService, private router: Router,private route:ActivatedRoute, private toastr: ToastrService) { }

  addDepot() {
    console.log(this.montant);
    const id = +this.route.snapshot.paramMap.get('id');
   this.data.depot(this.montant,id)
    .subscribe(
      res => {
        console.log(res);
        this.toastr.success("dépôt de"+this.montant+" ajouté")
        //this.router.navigate(['/compte'])
      },
      err =>{this.errorMessage=err.error.detail
      this.toastr.warning("dépôt minimal autorisé est de 75000")
    }
    )   
    
  }
  getPartenaireCompte(){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        this.data.getPartenaireCompte().subscribe(
          data=>{
            this.idCompteData=data
            console.log(data);
          },error => this.errorMessage = error.error.detail
        );
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      }
    })
    
  }


  ngOnInit() {
    this.getPartenaireCompte();
  }

}
