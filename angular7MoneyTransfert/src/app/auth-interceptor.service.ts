import { HTTP_INTERCEPTORS, HttpResponse } from '@angular/common/http';
import { Injectable,Injector } from '@angular/core';
import { HttpInterceptor, HttpHandler, HttpRequest } from '@angular/common/http';
import {AuthService} from './auth.service';
import { TokenStorageService } from './token-storage.service';
import { catchError } from 'rxjs/operators';

const TOKEN_HEADER_KEY = 'Authorization';

@Injectable()
export class AuthInterceptor implements HttpInterceptor {

    constructor(private token: TokenStorageService, private injector:Injector) { }

    /* intercept(req: HttpRequest<any>, next: HttpHandler) {
        let authReq = req;
        const token = this.token.getToken();
        if (token != null) {
            authReq = req.clone({setHeaders: {TOKEN_HEADER_KEY: 'Bearer ${token}'}

            });
           // authReq = req.clone({ headers: req.headers.set(TOKEN_HEADER_KEY, 'Bearer ' + token) });
        }
        return next.handle(authReq);
    } */
    intercept(request: HttpRequest<any>, next: HttpHandler) {
        let authService = this.injector.get(AuthService)
        console.log(authService.getToken());
        let tokenizedReq=request.clone(
       {
        setHeaders: {
            'Authorization': `Bearer ${authService.getToken()}`
        }
       })
       return next.handle(tokenizedReq);
       /*  if(this.token.getToken()){
            request=this.addToken(request,this.token.getToken());

           // authReq = req.clone({ headers: req.headers.set(TOKEN_HEADER_KEY, 'Bearer ' + token) });
        }
        return next.handle(request); */
    }

    private addToken(request: HttpRequest<any>,token: string){
        return request.clone({
            setHeaders: {
                'Authorization': 'Bearer ${token}'
            }
        });
    }
}

export const httpInterceptorProviders = [
    { provide: HTTP_INTERCEPTORS, useClass: AuthInterceptor, multi: true }
];
